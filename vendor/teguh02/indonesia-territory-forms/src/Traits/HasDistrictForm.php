<?php

namespace Teguh02\IndonesiaTerritoryForms\Traits;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Teguh02\IndonesiaTerritoryForms\Models\District;

trait HasDistrictForm
{
    /**
     * Get the district form
     *
     * @return Select
     */
    static function district_form() : Select
    {
        return Select::make(config('indonesia-territory-forms.forms_name.district'))
            ->searchable()
            ->preload()
            ->prefixIcon(fn() => match(config('indonesia-territory-forms.forms_icons.enable')) {
                true => config('indonesia-territory-forms.forms_icons.icons.district'),
                default => null
            })
            ->label(__('indonesia-territory-forms::indonesia-territory-forms.district'))
            ->name(config('indonesia-territory-forms.forms_name.district'))
            ->options(function (Get $get): array {
                return filled($get(config('indonesia-territory-forms.forms_name.city')))
                    ? collect(array_map(function($district) {
                        return [
                            'value' => $district['dis_id'],
                            'label' => $district['dis_name']
                        ];
                    }, app(District::class)->district_by_city($get(config('indonesia-territory-forms.forms_name.city'))))) 
                        ->mapWithKeys(fn($district) => [$district['value'] => $district['label']])
                        ->toArray() : [];
            });
    }
}