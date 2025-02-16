<?php

namespace App\Filament\Resources\AdministrationOfficerResource\Pages;

use App\Filament\Resources\AdministrationOfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdministrationOfficers extends ListRecords
{
    protected static string $resource = AdministrationOfficerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Tata Usaha')
            ->icon('heroicon-o-plus'),
        ];
    }
}
