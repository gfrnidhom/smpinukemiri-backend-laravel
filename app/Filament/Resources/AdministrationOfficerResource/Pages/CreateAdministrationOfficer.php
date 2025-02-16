<?php

namespace App\Filament\Resources\AdministrationOfficerResource\Pages;

use App\Filament\Resources\AdministrationOfficerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdministrationOfficer extends CreateRecord
{
    protected static string $resource = AdministrationOfficerResource::class;

    

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
