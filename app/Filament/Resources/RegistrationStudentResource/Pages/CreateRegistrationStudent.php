<?php

namespace App\Filament\Resources\RegistrationStudentResource\Pages;

use App\Filament\Resources\RegistrationStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegistrationStudent extends CreateRecord
{
    protected static string $resource = RegistrationStudentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
