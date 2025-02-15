<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
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

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Guru';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('first_name')
                        ->label('Nama Depan')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('last_name')
                        ->label('Nama Belakang')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('title')
                        ->label('Gelar Akademik')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('nip')
                        ->label('Nomor Induk Pegawai (NIP)')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('email')
                        ->label('Email Guru')
                        ->email()
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('phone')
                        ->label('Nomor Handphone/WA')
                        ->tel()
                        ->maxLength(255)
                        ->default(null),
                    RichEditor::make('address')
                        ->label('Alamat Lengkap')
                        ->columnSpanFull(),
                    Forms\Components\DatePicker::make('date_of_birth')
                        ->label('Tanggal Kelahiran'),
                    Select::make('gender')
                        ->label('Jenis Kelamin')
                        ->options([
                            'male' => 'Laki Laki',
                            'female' => 'Perempuan',
                            'other' => 'Lainnya',
                        ])
                        ->required(),
                    Forms\Components\TextInput::make('qualification')
                        ->label('Prodi Kuliah')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\TextInput::make('specialization')
                        ->label('Keahlian/Mata Pelajaran')
                        ->maxLength(255)
                        ->default(null),
                    Forms\Components\DatePicker::make('hire_date')
                        ->label('Tanggal Masuk Kerja'),
                    ToggleButtons::make('status')
                        ->required()
                        ->inline()
                        ->options([
                            'active' => 'Aktif',
                            'on_leave' => 'Keluar',
                            'retired' => 'Pensiun',
                        ])
                        ->icons([
                            'active' => 'heroicon-o-pencil',
                            'on_leave' => 'heroicon-o-check-circle',
                            'retired' => 'heroicon-o-clock',
                        ]),
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->directory('teacher')
                        ->columnSpanFull(),
                ])
                    ->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('last_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date_of_birth')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('qualification')
                    ->searchable(),
                Tables\Columns\TextColumn::make('specialization')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hire_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
