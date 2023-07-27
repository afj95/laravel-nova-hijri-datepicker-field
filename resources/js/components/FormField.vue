<template>
    <DefaultField
        :field="field"
        :errors="errors"
        :show-help-text="showHelpText"
        :full-width-content="fullWidthContent"
    >
        <template #field>
            <div class="flex items-center">
                <input
                    type="text"
                    class="form-control form-input form-input-bordered"
                    :id="field.uniqueKey"
                    :dusk="field.attribute"
                    :name="field.name"
                    :value="value"
                    :class="errorClasses"
                    :disabled="field.readonly"
                    @change="handleChange"
                    :placeholder="field.placeholder || field.name"
                />

                <datepicker-hijri
                    v-bind="{ ...$props, ...$attrs }"
                    :reference="field.uniqueKey"
                    :placement="field.placement"
                    :selected-date="field.value||field.selected_date||value"
                    :date-format="field.format"
                    v-model="value"
                />
            </div>
        </template>
    </DefaultField>
</template>

<script>
import {FormField, DependentFormField, HandlesValidationErrors} from 'laravel-nova'

export default {
    mixins: [FormField, HandlesValidationErrors, DependentFormField],

    props: ['resourceName', 'resourceId', 'field'],

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || this.value
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            this.fillIfVisible(formData, this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value
         */
        handleChange(event) {
            let value = event?.target?.value ?? event

            this.value = value
            if (this.field) {
                this.emitFieldValueChange(this.field.attribute, this.value)
            }
        },
    },
}
</script>

