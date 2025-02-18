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

class Settings extends BaseSettings
{

    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?int $navigationSort = 10;
    protected static ?string $navigationLabel = 'Pengaturan';

    public static function getNavigationLabel(): string
    {
        return 'Pengaturan';
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
                            TextInput::make('site_name')
                                ->label('Nama Situs')
                                ->required(),
                            RichEditor::make('site_tagline')
                                ->label('Tagline')
                                ->required(),
                            RichEditor::make('description_sort')
                                ->label('Deskripsi Singkat Sekolah')
                                ->required(),
                            TextInput::make('admin_email')
                                ->label('Email Administrator')
                                ->required(),

                            TextInput::make('site_copyright')
                                ->label('Copyright')
                                ->required(),
                            FileUpload::make('first_site_logo')
                                ->label('Logo Utama Website')
                                ->directory('settings')
                                ->required(),
                            FileUpload::make('two_site_logo')
                                ->label('Logo Kedua Website')
                                ->directory('settings')
                                ->required(),
                            ToggleButtons::make('maintenance_mode')
                                ->label('Mode Pemeliharaan')
                                ->required()
                                ->inline()
                                ->options([
                                    'active' => 'Aktif',
                                    'in_active' => 'Tidak Aktif',
                                ])
                                ->icons([
                                    'active' => 'heroicon-o-pencil',
                                    'in_active' => 'heroicon-c-x-mark',
                                ]),

                        ]),

                ]),
        ];
    }
}
