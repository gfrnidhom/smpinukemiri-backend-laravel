<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdministrationOfficerResource\Pages;
use App\Filament\Resources\AdministrationOfficerResource\RelationManagers;
use App\Models\AdministrationOfficer;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdministrationOfficerResource extends Resource
{
    protected static ?string $model = AdministrationOfficer::class;

    protected static ?string $navigationGroup = 'Kepegawaian';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Pegawai Tata Usaha';



    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('name')
                        ->label('Nama')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('nip')
                        ->label('NIP')
                        ->maxLength(255)
                        ->default(null),

                    Forms\Components\TextInput::make('position')
                        ->label('Jabatan')
                        ->required()
                        ->maxLength(255)
                        ->default('Tata Usaha'),

                    Forms\Components\TextInput::make('gender')
                        ->label('Jenis Kelamin'),

                    Forms\Components\TextInput::make('birthplace')
                        ->label('Tempat Lahir')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\DatePicker::make('birthdate')
                        ->label('Tanggal Lahir')
                        ->required(),

                    Forms\Components\TextInput::make('employment_status')
                        ->label('Status Kepegawaian')
                        ->required()
                        ->maxLength(255),

                    Select::make('religion')
                        ->label('Agama')
                        ->options([
                            'islam' => 'Islam',
                            'christian' => 'Kristen',
                            'catholic' => 'Katolik',
                            'hindu' => 'Hindu',
                            'buddha' => 'Buddha',
                            'confucian' => 'Konghucu',
                            'other' => 'Lainnya',
                        ])->required(),

                    Forms\Components\TextInput::make('qualification')
                        ->label('Kualifikasi')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('specialization')
                        ->label('Spesialisasi')
                        ->maxLength(255)
                        ->default(null),

                    RichEditor::make('address')
                        ->label('Alamat')
                        ->required()
                        ->columnSpanFull(),

                    RichEditor::make('remarks')
                        ->label('Catatan')
                        ->columnSpanFull(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position')
                    ->label('Jabatan/Posisi')
                    ->searchable(),

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
            'index' => Pages\ListAdministrationOfficers::route('/'),
            'create' => Pages\CreateAdministrationOfficer::route('/create'),
            'edit' => Pages\EditAdministrationOfficer::route('/{record}/edit'),
        ];
    }
}
