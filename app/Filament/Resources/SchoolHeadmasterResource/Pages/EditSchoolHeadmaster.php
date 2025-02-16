<?php

namespace App\Filament\Resources\SchoolHeadmasterResource\Pages;

use App\Filament\Resources\SchoolHeadmasterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSchoolHeadmaster extends EditRecord
{
    protected static string $resource = SchoolHeadmasterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus Kepala Sekolah')
                ->icon('heroicon-o-trash'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
