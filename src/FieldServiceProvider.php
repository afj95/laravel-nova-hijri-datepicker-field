<?php

namespace Afj95\LaravelNovaHijriDatepickerField;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('hijri-date-picker', __DIR__ . '/../dist/js/field.js');
            Nova::remoteScript("//cdn.jsdelivr.net/gh/abublihi/datepicker-hijri@v1.1/build/datepicker-hijri.js");
            Nova::style('hijri-date-picker', __DIR__ . '/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
