<?php

namespace App\Providers;

use App\Models\Setting;
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

        function cleanValue($value)
        {
            return stripslashes(trim($value, '"""'));
        }

        View::composer('*', function ($view) {

            $settings = Setting::pluck('value', 'key')->toArray();


            // Fungsi untuk membersihkan tanda petik dan backslash

            // Konversi ke dalam format yang lebih mudah digunakan
            $globalSettings = [
                'first_logo'       => asset('storage' . '/' . cleanValue($settings['first_site_logo'])),
                'second_logo'      => asset('storage' . '/' . cleanValue($settings['two_site_logo'])),
                'site_name'        => cleanValue($settings['site_name'] ?? 'Nama Default'),
                'site_tagline'     => cleanValue($settings['site_tagline'] ?? ''),
                'description_sort' => cleanValue($settings['description_sort'] ?? ''),
                'admin_email'      => cleanValue($settings['admin_email'] ?? ''),
                'site_copyright'   => cleanValue($settings['site_copyright'] ?? ''),
                'maintenance_mode' => cleanValue($settings['maintenance_mode'] ?? 'inactive'),
                'email'            => cleanValue($settings['email'] ?? ''),
                'phone'            => cleanValue($settings['no_telp'] ?? ''),
                'address'          => cleanValue($settings['address'] ?? ''),
                'google_maps'      => cleanValue($settings['google_maps_link'] ?? ''),
                'youtube'          => cleanValue($settings['youtube_url'] ?? ''),
                'instagram'        => cleanValue($settings['instagram_url'] ?? ''),
                'facebook'         => cleanValue($settings['facebook_url'] ?? ''),
                'tiktok'           => cleanValue($settings['tiktok_url'] ?? ''),
            ];

            if (!isset($view->getData()['settings'])) {
                $view->with('settings', $globalSettings);
            }
        });
    }
}
