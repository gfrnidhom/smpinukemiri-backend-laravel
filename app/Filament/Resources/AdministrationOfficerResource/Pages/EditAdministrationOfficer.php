<?php

namespace App\Filament\Resources\AdministrationOfficerResource\Pages;

use App\Filament\Resources\AdministrationOfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdministrationOfficer extends EditRecord
{
    protected static string $resource = AdministrationOfficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus Tata Usaha')
                ->icon('heroicon-o-trash'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
