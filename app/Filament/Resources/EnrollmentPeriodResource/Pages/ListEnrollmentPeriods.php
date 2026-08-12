<?php

namespace App\Filament\Resources\EnrollmentPeriodResource\Pages;

use App\Filament\Resources\EnrollmentPeriodResource;
use App\Filament\Resources\EnrollmentPeriodResource\Widgets\EnrollmentStatsWidget;
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

    public function getTitle(): string
    {
        return 'Gelombang Pendaftaran';
    }

    protected function getHeaderWidgets(): array
    {
        return [
            EnrollmentStatsWidget::class,
        ];
    }
}
