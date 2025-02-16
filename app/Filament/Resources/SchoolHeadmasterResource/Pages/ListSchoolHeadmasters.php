<?php

namespace App\Filament\Resources\SchoolHeadmasterResource\Pages;

use App\Filament\Resources\SchoolHeadmasterResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSchoolHeadmasters extends ListRecords
{
    protected static string $resource = SchoolHeadmasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Tambah Kepala Sekolah')
            ->icon('heroicon-o-plus'),
        ];
    }
}
