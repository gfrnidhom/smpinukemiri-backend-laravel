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

    protected static ?string $navigationGroup = 'Profil Sekolah';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Pengaturan Website';

    public static function getNavigationLabel(): string
    {
        return 'Pengaturan Website';
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
                            TextInput::make('admin_email')
                                ->label('Email Admin')
                                ->required(),
                            FileUpload::make('site_logo')
                                ->label('Logo Utama Website')
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

                    Tab::make('Header')
                        ->schema([
                            FileUpload::make('footer_logo')
                                ->label('Logo')
                                ->directory('settings.header')
                                ->required(),
                        ]),
                    Tab::make('Footer')
                        ->schema([
                            TextInput::make('site_copyright')
                                ->label('Copyright')
                                ->required(),
                            FileUpload::make('footer_logo')
                                ->label('Logo')
                                ->directory('settings.footer')
                                ->required(),
                        ])
                ]),
        ];
    }
}
