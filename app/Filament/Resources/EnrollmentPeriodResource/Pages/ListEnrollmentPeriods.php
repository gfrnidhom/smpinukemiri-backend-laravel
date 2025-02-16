<?php

namespace App\Filament\Resources\EnrollmentPeriodResource\Pages;

use App\Filament\Resources\EnrollmentPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEnrollmentPeriods extends ListRecords
{
    protected static string $resource = EnrollmentPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Gelombang')
                ->icon('heroicon-o-plus'),
        ];
    }


}
