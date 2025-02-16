<?php

namespace Teguh02\IndonesiaTerritoryForms\Traits;

use Filament\Forms\Components\Select;
use Filament\Forms\Get;
use Teguh02\IndonesiaTerritoryForms\Models\PostalCode;

trait HasPostalCode
{
    /**
     * Get the postal code form
     *
     * @return Select
     */
    static function postal_code_form() : Select
    {
        return Select::make(config('indonesia-territory-forms.forms_name.postal_code'))
            ->searchable()
            ->preload()
            ->prefixIcon(fn() => match(config('indonesia-territory-forms.forms_icons.enable')) {
                true => config('indonesia-territory-forms.forms_icons.icons.postal_code'),
                default => null
            })
            ->label(__('indonesia-territory-forms::indonesia-territory-forms.postal_code'))
            ->name(config('indonesia-territory-forms.forms_name.postal_code'))
            ->options(function (Get $get): array {
                return filled($get(config('indonesia-territory-forms.forms_name.sub_district')))
                    ? collect(array_map(function($postal_code) {
                        return [
                            'value' => $postal_code['postal_id'],
                            'label' => $postal_code['postal_code']
                        ];
                    }, app(PostalCode::class)->postal_code_by_subdistrict($get(config('indonesia-territory-forms.forms_name.sub_district'))))) 
                        ->mapWithKeys(fn($postal_code) => [$postal_code['value'] => $postal_code['label']])
                        ->toArray() : [];
            });
    }
}
