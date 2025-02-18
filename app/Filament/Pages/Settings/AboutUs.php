<?php

namespace App\Filament\Pages\Settings;

use Closure;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Outerweb\FilamentSettings\Filament\Pages\Settings as BaseSettings;

class AboutUs extends BaseSettings
{

    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?int $navigationSort = 8;
    protected static ?string $navigationLabel = 'Tentang Kami';

    public static function getNavigationLabel(): string
    {
        return 'Tentang Kami';
    }

    public function getTitle(): string
    {
        return 'Pengaturan';
    }

    public function schema(): array|Closure
    {
        return [
            Tabs::make('Settings')
                ->schema([
                    Tabs\Tab::make('Umum')
                        ->schema([
                            RichEditor::make('vision')
                                ->label('Visi Sekolah')
                                ->required(),
                            RichEditor::make('mission')
                                ->label('Misi Sekolah')
                                ->required(),
                            RichEditor::make('school_history')
                                ->label('Sejarah Sekolah')
                                ->required(),
                            FileUpload::make('school_image')
                                ->label('Gambar Sekolah')
                                ->directory('settings')
                                ->required(),

                        ]),
                ]),
        ];
    }
}
