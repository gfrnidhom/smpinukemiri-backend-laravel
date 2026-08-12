<?php

namespace App\Filament\Resources\SchoolHeadmasterResource\Pages;

use App\Filament\Resources\SchoolHeadmasterResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSchoolHeadmaster extends CreateRecord
{
    protected static string $resource = SchoolHeadmasterResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    public function getTitle(): string
    {
        return 'Tambah Kepala Sekolah';
    }
}
