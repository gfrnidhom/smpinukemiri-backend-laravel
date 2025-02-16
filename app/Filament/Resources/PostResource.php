<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Camya\Filament\Forms\Components\TitleWithSlugInput;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ToggleButtons;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Postingan';

    protected static ?string $navigationIcon = 'heroicon-o-square-2-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TitleWithSlugInput::make(
                        fieldTitle: 'title',
                        fieldSlug: 'slug',
                        titleLabel: 'Judul Postingan',
                        titlePlaceholder: 'Masukkan judul...',
                        slugLabel: 'Link:',
                    ),

                    RichEditor::make('description')
                        ->label('Deskripsi')
                        ->required()
                        ->columnSpanFull(),
                    Select::make('category_id')
                        ->label('Kategori Postingan')
                        ->required()
                        ->relationship('categories', 'name')
                        ->createOptionForm([
                            TitleWithSlugInput::make(
                                fieldTitle: 'name',
                                fieldSlug: 'slug',
                                titleLabel: 'Nama Kategori',
                                titlePlaceholder: 'Masukkan nama...',
                                slugLabel: 'Link:',
                            ),
                            RichEditor::make('description')
                                ->label('Deskripsi')
                                ->required()
                                ->columnSpanFull(),
                            FileUpload::make('image')
                                ->label('Gambar')
                                ->directory('categories')
                                ->columnSpanFull(),
                        ]),
                    Select::make('author_id')
                        ->label('Penulis Konten')
                        ->required()
                        ->relationship('author', 'name')
                        ->createOptionForm([
                            Forms\Components\TextInput::make('name')
                                ->label('Nama Penulis')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('email')
                                ->label('Email')
                                ->email()
                                ->required()
                                ->maxLength(255),
                            RichEditor::make('bio')
                                ->label('Biografi Penulis')
                                ->required()
                                ->columnSpanFull(),
                            Forms\Components\FileUpload::make('image')
                                ->label('Gambar')
                                ->directory('blogs')
                                ->image(),
                        ]),
                    ToggleButtons::make('status')
                        ->required()
                        ->inline()
                        ->options([
                            'draft' => 'Draft',
                            'published' => 'Published',
                            'scheduled' => 'Scheduled',
                            'archived' => 'Archive'
                        ])
                        ->icons([
                            'draft' => 'heroicon-o-pencil',
                            'published' => 'heroicon-o-check-circle',
                            'scheduled' => 'heroicon-o-clock',
                            'archived' => 'heroicon-o-check-circle',
                        ]),
                    Forms\Components\FileUpload::make('image')
                        ->label('Gambar')
                        ->directory('blogs')
                        ->imageEditor()
                        ->imageEditorMode(2)
                        ->imageEditorViewportWidth('1920')
                        ->imageEditorViewportHeight('1080')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Gambar')
                    ->circular(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50),
                Tables\Columns\TextColumn::make('categories.name')
                    ->label('Kategori')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Penulis Konten')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'draft' => 'gray',
                        'scheduled' => 'warning',
                        'published' => 'success',
                        'archived' => 'danger',
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
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
