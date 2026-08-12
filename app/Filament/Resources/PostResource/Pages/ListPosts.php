<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Widgets\PostStatsWidget;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Tambah Postingan')
                ->icon('heroicon-o-plus'),

        ];
    }

    public function getTitle(): string
    {
        return 'Postingan';
    }

    //Widget
    protected function getHeaderWidgets(): array
    {
        return [
            PostStatsWidget::class
        ];
    }
}
