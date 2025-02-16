<?php

namespace Teguh02\IndonesiaTerritoryForms;

use Spatie\LaravelPackageTools\Package;
use Illuminate\Support\ServiceProvider;

class IndonesiaTerritoryFormsServiceProvider extends ServiceProvider
{
    function register() : void 
    {
        # How to publish the config
        # php artisan vendor:publish --tag=indonesia-territory-forms-config

        # How to publish the lang
        # php artisan vendor:publish --tag=indonesia-territory-forms-lang

        //Register Config file
        $this->mergeConfigFrom(
            __DIR__ . '/../config/indonesia-territory-forms.php',
            'indonesia-territory-forms'
        );    

        // Register lang
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'indonesia-territory-forms');

        // Publish config
        $this->publishes([
            __DIR__ . '/../config/indonesia-territory-forms.php' => config_path('indonesia-territory-forms.php'),
        ], 'indonesia-territory-forms-config');

        // Publish lang
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang'),
        ], 'indonesia-territory-forms-lang');
    }
}
