<?php

namespace App\Filament\Resources\RegistrationStudentResource\Pages;

use App\Filament\Resources\RegistrationStudentResource;
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
}
