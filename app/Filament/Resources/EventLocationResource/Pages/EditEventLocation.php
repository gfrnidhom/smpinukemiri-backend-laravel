<?php

namespace App\Filament\Resources\EventLocationResource\Pages;

use App\Filament\Resources\EventLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventLocation extends EditRecord
{
    protected static string $resource = EventLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->label('Hapus Lokasi')
            ->icon('heroicon-o-trash'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
