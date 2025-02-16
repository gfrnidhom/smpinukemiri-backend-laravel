# Filament Indonesia Territory Select Form 

![Banner](https://raw.githubusercontent.com/teguh02/Indonesia-Territory-Forms/main/dist/images/teguh02-filament.jpg)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/teguh02/indonesia-territory-forms.svg?style=flat-square)](https://packagist.org/packages/teguh02/indonesia-territory-forms)
[![Total Downloads](https://img.shields.io/packagist/dt/teguh02/indonesia-territory-forms.svg?style=flat-square)](https://packagist.org/packages/teguh02/indonesia-territory-forms)


## Features
- ✅ Indonesia Territory Including: Province, City, District, Sub-Disctrict and Zip Code
- ✅ Cached Query To Make The Form More Faster
- ✅ Ready to Use
- ✅ No Needed Any Seeder

## Screenshoot
![Screenshot1](https://raw.githubusercontent.com/teguh02/Indonesia-Territory-Forms/main/dist/images/Screenshot1.png)

![Screenshot2](https://raw.githubusercontent.com/teguh02/Indonesia-Territory-Forms/main/dist/images/Screenshot2.png)

![Screenshot3](https://raw.githubusercontent.com/teguh02/Indonesia-Territory-Forms/main/dist/images/Screenshot3.png)

## Demo
![DEMO](https://raw.githubusercontent.com/teguh02/Indonesia-Territory-Forms/main/dist/images/DEMO.gif)

## Installation

You can install the package via composer:

```bash
composer require teguh02/indonesia-territory-forms
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="indonesia-territory-forms-config"
```

Optionally, you can publish the langs using

```bash
php artisan vendor:publish --tag=indonesia-territory-forms-lang
```

## Usage
### Components or Custom Page
For use this package on your component or custom page, you can see this form scheme sample below

```php
use Teguh02\IndonesiaTerritoryForms\IndonesiaTerritoryForms;

public static function form(Form $form): Form
{
    return $form
        ->schema([
            // ... your fields here

            // Call the form
            IndonesiaTerritoryForms::make(),

            // ... your fields here
        ]);
}
```

### Migration
If you want to add several column to store the data, you can make a new column according with your config forms_name (you can't make a column with different name in forms_name). For example please see this code below

```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('province_id')->nullable();
    $table->unsignedBigInteger('city_id')->nullable();
    $table->unsignedBigInteger('district_id')->nullable();
    $table->unsignedBigInteger('subdistrict_id')->nullable();
    $table->unsignedBigInteger('postal_code')->nullable();

    // Your another columns
    $table->string('name');
    $table->string('email')->unique();
});
```

But you have still can make dynamicaly the migration column name using <code>IndonesiaTerritoryForms</code> class in your migration below.
```php
Schema::create('users', function (Blueprint $table) {
    $table->id();
    IndonesiaTerritoryForms::make_Columns($table);

    // Your another columns
    $table->string('name');
    $table->string('email')->unique();
});
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Teguh Rijanandi](https://github.com/teguh02)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
