<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Filament\Resources\SkillResource\RelationManagers;
use App\Models\Skill;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Keahlian';

    protected static ?string $navigationIcon = 'heroicon-c-tv';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TitleWithSlugInput::make(
                        fieldTitle: 'skill_name',
                        fieldSlug: 'slug',
                        titleLabel: 'Nama Keahlian',
                        titlePlaceholder: 'Masukkan Nama Keahlian...',
                        slugLabel: 'Link:',
                    ),
                    RichEditor::make('description')
                        ->label('Deskripsi')
                        ->columnSpanFull(),
                    Select::make('program_id')
                        ->label('Kategori Program')
                        ->required()
                        ->relationship('programs', 'program_name'),
                    Forms\Components\FileUpload::make('image')
                        ->directory('skills')
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
                Tables\Columns\TextColumn::make('skill_name')
                    ->label('Nama Keahlian')
                    ->searchable(),
                Tables\Columns\TextColumn::make('programs.program_name')
                    ->label('Kategori Program')
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
                DeleteAction::make()
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
