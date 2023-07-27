<?php

namespace Afj95\HijriDatePicker;

use Laravel\Nova\Fields\Field;

class HijriDatePicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'hijri-date-picker';

    public function placement($value = 'bottom')
    {
        $this->withMeta(['placement' => $value]);

        return $this;
    }

    public function format($value = 'iYYYY/iMM/iDD')
    {
        $this->withMeta(['format' => $value]);

        return $this;
    }

    public function selected_date($value)
    {
        $this->withMeta(['selected_date' => $value]);

        return $this;
    }

    public function placeholder($value = 'dd/mm/yyyy')
    {
        $this->withMeta(['placeholder' => $value]);

        return $this;

    }

    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerialize(), [
            'id_name' => 'calendar' . $this->attribute,
        ]);
    }

}