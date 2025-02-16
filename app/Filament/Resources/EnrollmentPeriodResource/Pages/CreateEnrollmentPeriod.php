<?php

namespace App\Filament\Resources\EnrollmentPeriodResource\Pages;

use App\Filament\Resources\EnrollmentPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEnrollmentPeriod extends CreateRecord
{
    protected static string $resource = EnrollmentPeriodResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
