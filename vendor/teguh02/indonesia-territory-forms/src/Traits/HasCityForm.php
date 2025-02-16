<?php

namespace Teguh02\IndonesiaTerritoryForms\Traits;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Teguh02\IndonesiaTerritoryForms\Models\City;

trait HasCityForm 
{
    /**
     * Get the city form
     *
     * @return Select
     */
    static function city_form() : Select
    {
        return Select::make(config('indonesia-territory-forms.forms_name.city'))
            ->searchable()
            ->preload()
            ->prefixIcon(fn() => match(config('indonesia-territory-forms.forms_icons.enable')) {
                true => config('indonesia-territory-forms.forms_icons.icons.city'),
                default => null
            })
            ->label(__('indonesia-territory-forms::indonesia-territory-forms.city'))
            ->name(config('indonesia-territory-forms.forms_name.city'))
            ->options(function (Get $get): array {
                return filled($get(config('indonesia-territory-forms.forms_name.province')))
                    ? collect(array_map(function($city) {
                        return [
                            'value' => $city['city_id'],
                            'label' => $city['city_name']
                        ];
                    }, app(City::class)->city_by_provincy($get(config('indonesia-territory-forms.forms_name.province'))))) 
                        ->mapWithKeys(fn($city) => [$city['value'] => $city['label']])
                        ->toArray() : [];
            });
    }

}