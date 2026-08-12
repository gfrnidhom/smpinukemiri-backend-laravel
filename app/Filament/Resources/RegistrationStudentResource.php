<?php

namespace App\Filament\Resources;

use App\Filament\Exports\RegistrationStudentExporter;
use App\Filament\Resources\RegistrationStudentResource\Pages;
use App\Filament\Resources\RegistrationStudentResource\Widgets\RegistrationStudentStatsWidget;
use App\Models\RegistrationStudent;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\ExportAction;

use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\District;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\Village;
use ZipArchive;

use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction as TableExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use pxlrbt\FilamentExcel\Columns\Column;

class RegistrationStudentResource extends Resource
{
    protected static ?string $model = RegistrationStudent::class;

    protected static ?string $navigationGroup = 'Manajemen PPDB';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Siswa';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('registration_number')
                        ->label('ID Registrasi (Terisi Otomatis)')
                        ->readOnly()
                        ->disabled()
                        ->hidden(),
                    Select::make('user_id')
                        ->label('Pengguna')
                        ->required()
                        ->searchable()
                        ->relationship(name: 'user', titleAttribute: 'name'),
                    Select::make('enrollment_period_id')
                        ->label('Gelombang Pendaftaran')
                        ->required()
                        ->relationship(name: 'enrollment', titleAttribute: 'period_name')
                        ->searchable(),
                    Forms\Components\TextInput::make('full_name')
                        ->label('Nama Lengkap')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('nisn')
                        ->label('NISN')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('nik')
                        ->label('NIK')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('birthplace')
                        ->label('Tempat Lahir')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DatePicker::make('birthdate')
                        ->label('Tanggal Lahir')
                        ->required(),
                    Select::make('gender')
                        ->label('Jenis Kelamin')
                        ->required()
                        ->options([
                            'Male' => 'Laki-Laki',
                            'Female' => 'Perempuan',
                        ]),
                    Select::make('religion')
                        ->label('Agama')
                        ->required()
                        ->options([
                            'Islam' => 'Islam',
                            'Christian' => 'Kristen',
                            'Catholic' => 'Katolik',
                            'Hindu' => 'Hindu',
                            'Buddhist' => 'Buddha',
                            'Confucianism' => 'Konghucu',
                            'Other' => 'Lainnya',
                        ]),
                    Forms\Components\TextInput::make('phone_number')
                        ->label('Nomor Telepon')
                        ->tel()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->maxLength(255)
                        ->default(null)
                        ->columnSpanFull()
                        ->required(),
                ])->columns(2),

                Section::make([
                    Select::make('province_code')
                        ->label('Provinsi')
                        ->placeholder('Pilih Provinsi')
                        ->options(Province::pluck('name', 'code')) // Menggunakan kode sebagai key
                        ->searchable()
                        ->reactive(),

                    Select::make('city_code')
                        ->label('Kota/Kabupaten')
                        ->placeholder('Pilih Kota/Kabupaten')
                        ->options(
                            fn($get) =>
                            City::where('province_code', $get('province_code'))->pluck('name', 'code')
                        )
                        ->searchable()
                        ->reactive()
                        ->disabled(fn($get) => !$get('province_code')),

                    Select::make('district_code')
                        ->label('Kecamatan')
                        ->placeholder('Pilih Kecamatan')
                        ->options(
                            fn($get) =>
                            District::where('city_code', $get('city_code'))->pluck('name', 'code')
                        )
                        ->searchable()
                        ->reactive()
                        ->disabled(fn($get) => !$get('city_code')),

                    Select::make('village_code')
                        ->label('Desa')
                        ->placeholder('Pilih Desa')
                        ->options(
                            fn($get) =>
                            Village::where('district_code', $get('district_code'))->pluck('name', 'code')
                        )
                        ->searchable()
                        ->disabled(fn($get) => !$get('district_code')),
                    RichEditor::make('address')
                        ->label('Alamat Lengkap')
                        ->required()
                        ->columnSpanFull(),
                ]),
                Section::make([
                    Select::make('previous_school')
                        ->label('Asal Sekolah')
                        ->required()
                        ->options([
                            'sd' => 'Sekolah Dasar (SD)',
                            'mi' => 'Madrasah Ibtidaiyah (MI)',
                        ]),
                    Forms\Components\TextInput::make('previous_school_name')
                        ->label('Nama Sekolah Asal')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\DateTimePicker::make('registration_date')
                        ->label('Tanggal Pendaftaran')
                        ->required(),
                    RichEditor::make('additional_notes')
                        ->label('Catatan Tambahan')
                        ->columnSpanFull(),
                    ToggleButtons::make('registration_status')
                        ->required()
                        ->inline()
                        ->options([
                            'Pending' => 'Proses Verifikasi',
                            'Accepted' => 'Diterima',
                            'Rejected' => 'Ditolak',
                        ])
                        ->icons([
                            'Pending' => 'heroicon-o-pencil',
                            'Accepted' => 'heroicon-o-check-circle',
                            'Rejected' => 'heroicon-o-clock',
                        ]),
                ]),
                Section::make([
                    Section::make('Data Orang Tua')->schema([
                        Repeater::make('parent') // Pastikan relasi sudah dibuat di model
                            ->relationship('parent')
                            ->schema([
                                Forms\Components\TextInput::make('father_name')
                                    ->label('Nama Ayah')
                                    ->required(),
                                Forms\Components\TextInput::make('father_religion')
                                    ->label('Agama Ayah')
                                    ->required(),
                                Forms\Components\TextInput::make('father_occupation')
                                    ->label('Pekerjaan Ayah')
                                    ->required(),
                                Forms\Components\TextInput::make('mother_name')
                                    ->label('Nama Ibu')
                                    ->required(),
                                Forms\Components\TextInput::make('mother_religion')
                                    ->label('Agama Ibu')
                                    ->required(),
                                Forms\Components\TextInput::make('mother_occupation')
                                    ->label('Pekerjaan Ibu')
                                    ->required(),
                                Forms\Components\TextInput::make('guardian_name')
                                    ->label('Nama Wali'),
                                Forms\Components\TextInput::make('guardian_occupation')
                                    ->label('Pekerjaan Wali'),
                                Forms\Components\TextInput::make('guardian_relationship')
                                    ->label('Hubungan dengan Wali'),
                            ])
                            ->minItems(1)
                            ->maxItems(2),
                    ]),

                    // Form Document
                    Section::make('Dokumen Siswa')->schema([
                        Repeater::make('document') // Pastikan relasi sudah dibuat di model
                            ->relationship('document')
                            ->schema([
                                FileUpload::make('pas_foto')
                                    ->label('Pas Foto')
                                    ->directory('registration/documents')
                                    ->image()
                                    ->required(),
                                FileUpload::make('family_card')
                                    ->label('Kartu Keluarga')
                                    ->directory('registration/documents')
                                    ->preserveFilenames()
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->required(),
                                FileUpload::make('id_card')
                                    ->label('KTP Orang Tua')
                                    ->directory('registration/documents')
                                    ->image()
                                    ->required(),
                                FileUpload::make('birth_certificate')
                                    ->label('Akta Kelahiran')
                                    ->directory('registration/documents')
                                    ->preserveFilenames()
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->required(),
                                FileUpload::make('report_card')
                                    ->label('Raport')
                                    ->directory('registration/documents')
                                    ->preserveFilenames()
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->required(),
                                FileUpload::make('diploma')
                                    ->preserveFilenames()
                                    ->directory('registration/documents')
                                    ->acceptedFileTypes(['application/pdf'])
                                    ->label('Ijazah')
                                    ->required(),
                                FileUpload::make('pip_card')
                                    ->label('Kartu PIP')
                                    ->directory('registration/documents')
                                    ->preserveFilenames()
                                    ->acceptedFileTypes(['application/pdf']),
                            ]),

                    ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_school')
                    ->label('Asal Sekolah')
                    ->formatStateUsing(fn($state) => strtoupper($state))
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->label('No. Handphone')
                    ->searchable(),

                Tables\Columns\TextColumn::make('registration_date')
                    ->label('Tanggal Registrasi')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('registration_status')
                    ->label('Status')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'Pending' => 'gray',
                        'Accepted' => 'success',
                        'Rejected' => 'danger',
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
                Filter::make('previous_school')->label('Asal Sekolah'),
                Filter::make('registration_status')->label('Status Registrasi'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Action::make('download_files')
                    ->label('Download Files')
                    ->icon('heroicon-o-document')
                    ->action(fn($record) => static::downloadStudentFiles($record)),
                //Delete
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([

                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()
                ]),
            ])
            ->headerActions([

                TableExportAction::make()->exports([
                    ExcelExport::make()->withColumns([
                        Column::make('registration_number')->heading('registration_number'),
                        Column::make('user.name')->heading('Nama Pengguna'),
                        Column::make('enrollment.period_name')->heading('Gelombang Pendaftaran'),
                        Column::make('full_name')->heading('Nama Lengkap'),
                        Column::make('nisn')->heading('NISN'),
                        Column::make('nik')->heading('NIK'),
                        Column::make('birthplace')->heading('Tempat Lahir'),
                        Column::make('birthdate')->heading('Tanggal Lahir'),
                        Column::make('gender')->heading('Jenis Kelamin'),
                        Column::make('religion')->heading('Agama'),
                        Column::make('phone_number')->heading('Nomor Telepon'),
                        Column::make('email')->heading('Email'),
                        Column::make('previous_school')->heading('Asal Sekolah'),
                        Column::make('previous_school_name')->heading('Nama Sekolah Asal'),
                        Column::make('registration_date')->heading('Tanggal Pendaftaran'),
                        Column::make('province.name')->heading('Provinsi'),
                        Column::make('city.name')->heading('Kota/Kabupaten'),
                        Column::make('district.name')->heading('Kecamatan'),
                        Column::make('village.name')->heading('Desa'),
                        Column::make('address')->heading('Alamat'),
                        Column::make('registration_status')->heading('Status Pendaftaran'),
                        Column::make('created_at')->heading('Dibuat Pada'),
                        Column::make('updated_at')->heading('Diperbarui Pada'),

                        // Data Orang Tua
                        Column::make('parent.father_name')->heading('Nama Ayah'),
                        Column::make('parent.father_religion')->heading('Agama Ayah'),
                        Column::make('parent.father_occupation')->heading('Pekerjaan Ayah'),
                        Column::make('parent.mother_name')->heading('Nama Ibu'),
                        Column::make('parent.mother_religion')->heading('Agama Ibu'),
                        Column::make('parent.mother_occupation')->heading('Pekerjaan Ibu'),
                        Column::make('parent.guardian_name')->heading('Nama Wali'),
                        Column::make('parent.guardian_occupation')->heading('Pekerjaan Wali'),
                        Column::make('parent.guardian_relationship')->heading('Hubungan dengan Wali'),
                    ])->askForFilename()
                        ->askForWriterType(),
                ]),

                Action::make('download_all_documents')
                    ->label('Download Semua Dokumen')
                    ->icon('heroicon-o-document')
                    ->action(fn() => static::downloadAllDocuments())
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //

        ];
    }

    public function getWidget(): array
    {
        return [
            RegistrationStudentStatsWidget::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistrationStudents::route('/'),
            'create' => Pages\CreateRegistrationStudent::route('/create'),
            'edit' => Pages\EditRegistrationStudent::route('/{record}/edit'),
        ];
    }
    public static function downloadStudentFiles($record)
    {
        Log::info("Download function triggered for: {$record->full_name}");

        $folderName = Str::slug($record->full_name, '_');
        $folderPath = "registration/documents/{$folderName}";

        if (!Storage::disk('public')->exists($folderPath)) {
            Log::error("Folder tidak ditemukan: {$folderPath}");
            return back()->with('error', 'Folder tidak ditemukan.');
        }

        Log::info("Folder ditemukan: {$folderPath}");

        $zipFileName = "{$folderName}.zip";
        $zipFilePath = storage_path("app/public/{$zipFileName}");

        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            $files = Storage::disk('public')->files($folderPath);

            if (empty($files)) {
                Log::error("Tidak ada file dalam folder: {$folderPath}");
                return back()->with('error', 'Tidak ada file dalam folder.');
            }

            foreach ($files as $file) {
                $relativeName = basename($file);
                $zip->addFile(storage_path("app/public/{$file}"), $relativeName);
            }

            $zip->close();
            Log::info("ZIP berhasil dibuat: {$zipFilePath}");
        } else {
            Log::error("Gagal membuat file ZIP.");
            return back()->with('error', 'Gagal membuat file ZIP.');
        }

        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }

    public static function downloadAllDocuments()
    {
        $folderPath = storage_path('app/public/registration/documents');

        if (!Storage::disk('public')->exists('registration/documents')) {
            return back()->with('error', 'Folder tidak ditemukan.');
        }

        $zipFileName = 'semua_dokumen.zip';
        $zipFilePath = storage_path("app/public/{$zipFileName}");

        $zip = new ZipArchive;
        if ($zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
            $files = Storage::disk('public')->allFiles('registration/documents');

            if (empty($files)) {
                return back()->with('error', 'Tidak ada file dalam folder.');
            }

            foreach ($files as $file) {
                $relativeName = str_replace('registration/documents/', '', $file);
                $zip->addFile(storage_path("app/public/{$file}"), $relativeName);
            }

            $zip->close();
        } else {
            return back()->with('error', 'Gagal membuat file ZIP.');
        }

        return response()->download($zipFilePath)->deleteFileAfterSend(true);
    }
}


