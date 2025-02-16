<?php

namespace App\Filament\Resources\EnrollmentPeriodResource\Pages;

use App\Filament\Resources\EnrollmentPeriodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEnrollmentPeriod extends EditRecord
{
    protected static string $resource = EnrollmentPeriodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus Gelombang')
                ->icon('heroicon-o-trash'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
