<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationGroup = 'Manajemen Event';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Event';

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TitleWithSlugInput::make(
                        fieldTitle: 'event_name',
                        fieldSlug: 'slug',
                        titleLabel: 'Nama Event',
                        titlePlaceholder: 'Masukkan event...',
                        slugLabel: 'Link:',

                    )->columnSpanFull(),
                    Forms\Components\DatePicker::make('start_date')
                        ->label('Tanggal Awal')
                        ->required(),
                    Forms\Components\DatePicker::make('end_date')
                        ->label('Tanggal Berakhir'),
                    TimePicker::make('start_time')
                        ->label('Waktu Mulai')
                        ->prefixIcon('heroicon-m-check-circle')
                        ->prefixIconColor('success')
                        ->required(),
                    TimePicker::make('end_time')
                        ->label('Waktu Berakhir')
                        ->prefixIcon('heroicon-m-check-circle')
                        ->prefixIconColor('success')
                        ->required(),
                    RichEditor::make('description')
                        ->label('Deskripsi')
                        ->columnSpanFull()
                        ->required(),
                    Select::make('event_category_id')
                        ->label('Kategori Event')
                        ->required()
                        ->relationship('eventCategories', 'category_name')
                        ->createOptionForm([
                            TitleWithSlugInput::make(
                                fieldTitle: 'category_name',
                                fieldSlug: 'slug',
                                titleLabel: 'Nama Kategori',
                                titlePlaceholder: 'Masukkan kategori...',
                                slugLabel: 'Link:',
                            ),
                            RichEditor::make('description')
                                ->label('Deskripsi Lokasi')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\FileUpload::make('image')
                                ->label('Gambar')
                                ->image(),
                        ]),
                    Select::make('event_location_id')
                        ->label('Lokasi Event')
                        ->required()
                        ->relationship('eventLocation', 'location_name')
                        ->createOptionForm([
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
                                ->image(),
                        ]),
                    // ->relationship(),
                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->image()
                        ->directory('events')
                        ->columnSpanFull(),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular(),
                Tables\Columns\TextColumn::make('event_name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Waktu Mulai'),
                Tables\Columns\TextColumn::make('end_time')
                    ->label('Waktu Berakhir'),
                Tables\Columns\TextColumn::make('eventcategories.category_name')
                    ->label('Kategori')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('eventLocation.location_name')
                    ->label('Lokasi')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
