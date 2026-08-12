<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //

            Stat::make('Total Postingan', Post::count())
                ->description('Total artikel atau berita yang telah diposting')
                ->icon('heroicon-o-newspaper')
                ->color('primary'),

            Stat::make('Draft Postingan', Post::where('status', 'Draft')->count())
                ->description('Postingan yang belum dipublikasikan')
                ->icon('heroicon-o-pencil')
                ->color('gray'),

            Stat::make('Postingan Dipublikasikan', Post::where('status', 'Published')->count())
                ->description('Jumlah postingan yang telah dipublikasikan')
                ->icon('heroicon-o-globe-alt')
                ->color('success'),
        ];
    }
}
