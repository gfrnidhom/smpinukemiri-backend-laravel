<?php

namespace App\Filament\Resources\RegistrationStudentResource\Pages;

use App\Filament\Resources\RegistrationStudentResource;
use App\Filament\Resources\RegistrationStudentResource\Widgets\RegistrationStudentStatsWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRegistrationStudents extends ListRecords
{
    protected static string $resource = RegistrationStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Siswa')
                ->icon('heroicon-o-plus'),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            RegistrationStudentStatsWidget::class,
        ];
    }

    public function getTitle(): string
    {
        return 'Penerimaan Siswa Baru';
    }
}
