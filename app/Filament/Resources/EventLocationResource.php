<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventLocationResource\Pages;
use App\Filament\Resources\EventLocationResource\RelationManagers;
use App\Models\EventLocation;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventLocationResource extends Resource
{
    protected static ?string $model = EventLocation::class;

    protected static ?string $navigationGroup = 'Manajemen Event';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Lokasi Event';


    protected static ?string $navigationIcon = 'far-map';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    Forms\Components\TextInput::make('location_name')
                        ->label('Nama Lokasi')
                        ->required()
                        ->maxLength(255),
                    RichEditor::make('description')
                        ->label('Deskripsi Lokasi')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->directory('event-location')
                        ->image(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular()
                    ->label('Gambar'),
                Tables\Columns\TextColumn::make('location_name')
                    ->label('Nama Lokasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi Lokasi')
                    ->limit(50)
                    ->html()
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
            'index' => Pages\ListEventLocations::route('/'),
            'create' => Pages\CreateEventLocation::route('/create'),
            'edit' => Pages\EditEventLocation::route('/{record}/edit'),
        ];
    }
}
