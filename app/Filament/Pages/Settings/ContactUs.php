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

class ContactUs extends BaseSettings
{

    protected static ?string $navigationGroup = 'Manajemen Website';
    protected static ?int $navigationSort = 9;
    protected static ?string $navigationLabel = 'Kontak Kami';

    public static function getNavigationLabel(): string
    {
        return 'Kontak Kami';
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
                            TextInput::make('email')
                                ->label('Email')
                                ->required(),
                            TextInput::make('no_telp')
                                ->label('Nomor Handphone')
                                ->required(),
                            RichEditor::make('address')
                                ->label('Alamat Sekolah')
                                ->required(),
                            TextInput::make('google_maps_link')
                                ->label('Link Google Maps Sekolah')
                                ->required(),
                            TextInput::make('youtube_url')
                                ->label('Link Youtube')
                                ->required(),
                            TextInput::make('instagram_url')
                                ->label('Media Sosial Instagram')
                                ->required(),
                            TextInput::make('facebook_url')
                                ->label('Media Sosial Facebook')
                                ->required(),
                            TextInput::make('tiktok_url')
                                ->label('Media Sosial Tiktok')
                                ->required(),

                        ]),
                ]),
        ];
    }
}
