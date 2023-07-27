# Laravel Nova Hijri/islamic Datepicker Field

A Laravel Nova Hijri/islamic Datepicker field.
> Support laravel 10+ and nova 4+

## Installation
Run this command in your Laravel Nova project:

```shell 
composer require afj95/laravel-nova-hijri-datepicker-field
```

## Usage
Use this field as any other fields.

```php
use Afj95\LaravelNovaHijriDatepickerField\HijriDatePicker;

HijriDatePicker::make('Date', 'date')
    ->format('iYYYY/iMM/iDD')
    ->placeholder('YYYY/MM/DD')
    ->selected_date('1444/12/12')
    ->placement('bottom'),

```

### Contributions
All contributions are welcomed. Please send a PR.



### Authors
* [afj95](https://github.com/afj95) <afjamous.95@gmail.com>
* [mPhpMaster](https://github.com/mPhpMaster)

The package are based on [datepicker-hijri](https://github.com/abublihi/datepicker-hijri).

### License

This package is open-sourced software licensed under the [MIT Licence](https://github.com/afj95/laravel-nova-hijri-datepicker-field/blob/main/LICENSE)

