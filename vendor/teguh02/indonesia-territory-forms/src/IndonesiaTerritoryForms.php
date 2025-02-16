<?php

namespace Teguh02\IndonesiaTerritoryForms;

use Teguh02\IndonesiaTerritoryForms\Traits\HasProvinceForm;
use Filament\Forms\Components\Section;
use Illuminate\Database\Schema\Blueprint;
use Teguh02\IndonesiaTerritoryForms\Traits\HasCityForm;
use Teguh02\IndonesiaTerritoryForms\Traits\HasDistrictForm;
use Teguh02\IndonesiaTerritoryForms\Traits\HasPostalCode;
use Teguh02\IndonesiaTerritoryForms\Traits\HasSubDistrictForm;

class IndonesiaTerritoryForms {

    use HasProvinceForm, 
        HasCityForm,
        HasDistrictForm,
        HasSubDistrictForm,
        HasPostalCode;

    public static function make() : Section
    {
        return Section::make(__('indonesia-territory-forms::indonesia-territory-forms.section_title'))
            ->schema([
                static::province_form(),
                config('indonesia-territory-forms.forms_visibility.city') ? static::city_form() : null,
                config('indonesia-territory-forms.forms_visibility.district') ? static::district_form() : null,
                config('indonesia-territory-forms.forms_visibility.sub_district') ? static::sub_district_form() : null,
                config('indonesia-territory-forms.forms_visibility.postal_code') ? static::postal_code_form() : null,
            ]);
    }

    /**
     * Automatically create the Indonesia Territory columns
     * based on the config/indonesia-territory-forms.php
     *
     * @param Blueprint $table
     * @return void
     */
    public static function make_Columns(Blueprint $table) : void
    {
        foreach (config('indonesia-territory-forms.forms_name') as $key => $value) {
            $table->unsignedBigInteger($value)->nullable();
        }
    }
}