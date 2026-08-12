<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SchoolHeadmaster;
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
                'title' => 'SMP Islam Nurul Ulum Kemiri',
                'description' => 'Memberikan yang Terbaik Bagi Siswa. Pendidikan berkualitas dan lingkungan positif.',
                'image' => asset('frontend/img/logo_smp.png'),
                'url' => url('/'),
            ];

            if (!isset($view->getData()['blogs'])) {
                $view->with('blogs', $defaultMeta);
            }
        });

        View::composer('*', function ($view) {

            $settings = Setting::pluck('value', 'key')->toArray();

            // Fungsi untuk membersihkan tanda petik dan backslash
            $cleanValue = function ($value) {
                return stripslashes(trim($value, '"""'));
            };

            // Konversi ke dalam format yang lebih mudah digunakan
            $globalSettings = [
                'first_logo'       => asset('storage' . '/' . $cleanValue($settings['first_site_logo'] ?? '')),
                'second_logo'      => asset('storage' . '/' . $cleanValue($settings['two_site_logo'] ?? '')),
                'site_name'        => $cleanValue($settings['site_name'] ?? 'SMP Islam Nurul Ulum'),
                'site_tagline'     => $cleanValue($settings['site_tagline'] ?? ''),
                'vision'           => $cleanValue($settings['vision'] ?? ''),
                'mission'          => $cleanValue($settings['mission'] ?? ''),
                'school_history'   => $cleanValue($settings['school_history'] ?? ''),
                'description_sort' => $cleanValue($settings['description_sort'] ?? ''),
                'admin_email'      => $cleanValue($settings['admin_email'] ?? ''),
                'site_copyright'   => $cleanValue($settings['site_copyright'] ?? ''),
                'maintenance_mode' => $cleanValue($settings['maintenance_mode'] ?? 'inactive'),
                'email'            => $cleanValue($settings['email'] ?? ''),
                'phone'            => $cleanValue($settings['no_telp'] ?? ''),
                'address'          => $cleanValue($settings['address'] ?? ''),
                'google_maps'      => $cleanValue($settings['google_maps_link'] ?? ''),
                'youtube'          => $cleanValue($settings['youtube_url'] ?? ''),
                'instagram'        => $cleanValue($settings['instagram_url'] ?? ''),
                'facebook'         => $cleanValue($settings['facebook_url'] ?? ''),
                'tiktok'           => $cleanValue($settings['tiktok_url'] ?? ''),
                'home_image'       => asset('storage' . '/' . $cleanValue($settings['home_image'] ?? '')),
                'school_image'     => asset('storage' . '/' . $cleanValue($settings['school_image'] ?? '')),
                'school_image2'    => asset('storage' . '/' . $cleanValue($settings['school_image2'] ?? '')),
                'school_image3'    => asset('storage' . '/' . $cleanValue($settings['school_image3'] ?? '')),
                'school_image4'    => asset('storage' . '/' . $cleanValue($settings['school_image4'] ?? '')),
                'school_image5'    => asset('storage' . '/' . $cleanValue($settings['school_image5'] ?? '')),
                'video_youtube1'   => $cleanValue($settings['video_youtube1'] ?? ''),
                'video_youtube2'   => $cleanValue($settings['video_youtube2'] ?? ''),
            ];

            if (!isset($view->getData()['settings'])) {
                $view->with('settings', $globalSettings);
            }
        });

        View::composer('*', function ($view) {

            $categories = Category::limit(5)->get();

            if (!isset($view->getData()['categories'])) {
                $view->with('categories', $categories);
            }
        });

        View::composer('*', function ($view) {

            $headmaster = SchoolHeadmaster::where('nip', '196512121990031001')->first();

            if (!isset($view->getData()['headmaster'])) {
                $view->with('headmaster', $headmaster);
            }
        });
    }
}
