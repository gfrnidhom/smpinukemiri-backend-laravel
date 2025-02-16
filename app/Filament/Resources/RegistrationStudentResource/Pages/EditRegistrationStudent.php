<?php

namespace App\Filament\Resources\RegistrationStudentResource\Pages;

use App\Filament\Resources\RegistrationStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRegistrationStudent extends EditRecord
{
    protected static string $resource = RegistrationStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus Siswa')
                ->icon('heroicon-o-trash'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
