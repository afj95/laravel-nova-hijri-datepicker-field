<?php

namespace Afj95\LaravelNovaHijriDatepickerField;

use Carbon\Carbon;
use Laravel\Nova\Fields\Field;

/**
 *
 */
class HijriDatePicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'hijri-date-picker';

    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|\Closure|callable|object|null  $attribute
     * @param  (callable(mixed, mixed, ?string):mixed)|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);

        $this
            ->format()
            ->placeholder()
            ->placement(currentLocale() === 'ar' ? 'left' : 'right');
    }

    /**
     * @param $value
     * @return $this
     */
    public function placement($value = 'bottom')
    {
        $this->withMeta(['placement' => $value]);

        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function format($value = 'iYYYY/iMM/iDD')
    {
        $this->withMeta(['format' => $value]);

        return $this;
    }

    /**
     * @param $value
     * @return $this
     */
    public function selected_date($value)
    {
        $this->withMeta(['selected_date' => $value]);

        return $this;
    }

    /**
     * @param string|null $text
     * @return $this|HijriDatePicker
     */
    public function placeholder($text = '')
    {
        $this->withMeta(['placeholder' => $text]);

        return $this;

    }

    public function jsonSerialize(): array
    {
        $data = parent::jsonSerialize();
        if (isset($data['value']) && $data['value'] instanceof Carbon) {
            $data['value'] = $data['value']->format('Y/m/d');
        }

        return array_merge($data, [

        ]);
    }

}
