<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationStudentResource\Pages;
use App\Filament\Resources\RegistrationStudentResource\RelationManagers;
use App\Models\RegistrationStudent;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Teguh02\IndonesiaTerritoryForms\IndonesiaTerritoryForms;

class RegistrationStudentResource extends Resource
{
    protected static ?string $model = RegistrationStudent::class;

    protected static ?string $navigationGroup = 'Manajemen PPDB';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Siswa';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Select::make('user_id')
                        ->label('Siswa')
                        ->required()
                        ->searchable()
                        ->relationship(name: 'users', titleAttribute: 'name'),
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
                    Forms\Components\TextInput::make('gender')
                        ->label('Jenis Kelamin')
                        ->required(),
                    Forms\Components\TextInput::make('religion')
                        ->label('Agama')
                        ->required(),
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
                        ->columnSpanFull(),
                ])->columns(2),

                Section::make([
                    IndonesiaTerritoryForms::make(),
                    RichEditor::make('address')
                        ->label('Alamat Lengkap')
                        ->required()
                        ->columnSpanFull(),
                ]),
                Section::make([
                    Forms\Components\TextInput::make('previous_school')
                        ->label('Sekolah Sebelumnya')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('accepted_class')
                        ->label('Kelas Diterima')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('guardian_relationship')
                        ->label('Hubungan dengan Wali')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\DateTimePicker::make('registration_date')
                        ->label('Tanggal Pendaftaran')
                        ->required(),
                    RichEditor::make('additional_notes')
                        ->label('Catatan Tambahan')
                        ->columnSpanFull(),
                    ToggleButtons::make('status')
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
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('enrollment_period_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthplace')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('religion'),
                Tables\Columns\TextColumn::make('province_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('district_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subdistrict_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('postal_code')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('previous_school')
                    ->searchable(),
                Tables\Columns\TextColumn::make('accepted_class')
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardian_relationship')
                    ->searchable(),
                Tables\Columns\TextColumn::make('registration_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('registration_status'),
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
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
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
}
