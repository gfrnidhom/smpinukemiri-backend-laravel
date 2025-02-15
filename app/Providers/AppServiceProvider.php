<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            
            $defaultMeta = [
                'title' => 'SMPN 2 Purwosari',
                'description' => 'Mewadahi Bakat dan Minat Meraih Masa Depan',
                'image' => asset('frontend/images/logo/logo-colour.png'),
                'url' => url('/'),
            ];

            if (!isset($view->getData()['blogs'])) {
                $view->with('blogs', $defaultMeta);
            }
        });
    }
}
