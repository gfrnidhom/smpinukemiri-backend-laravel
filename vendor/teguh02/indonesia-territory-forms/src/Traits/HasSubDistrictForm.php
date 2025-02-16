<?php

namespace Teguh02\IndonesiaTerritoryForms\Traits;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Teguh02\IndonesiaTerritoryForms\Models\SubDistrict;
trait HasSubDistrictForm
{
    /**
     * Get the sub district form
     *
     * @return Select
     */
    static function sub_district_form() : Select
    {
        return Select::make(config('indonesia-territory-forms.forms_name.sub_district'))
            ->searchable()
            ->preload()
            ->prefixIcon(fn() => match(config('indonesia-territory-forms.forms_icons.enable')) {
                true => config('indonesia-territory-forms.forms_icons.icons.sub_district'),
                default => null
            })
            ->label(__('indonesia-territory-forms::indonesia-territory-forms.sub_district'))
            ->name(config('indonesia-territory-forms.forms_name.sub_district'))
            ->options(function (Get $get): array {
                return filled($get(config('indonesia-territory-forms.forms_name.district')))
                    ? collect(array_map(function($sub_district) {
                        return [
                            'value' => $sub_district['subdis_id'],
                            'label' => $sub_district['subdis_name']
                        ];
                    }, app(SubDistrict::class)->subdistrict_by_district($get(config('indonesia-territory-forms.forms_name.district'))))) 
                        ->mapWithKeys(fn($sub_district) => [$sub_district['value'] => $sub_district['label']])
                        ->toArray() : [];
            });
    }
}