<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent">
    <template #field>
      <input
        id="calender"
        type="text"
        class="form-control form-input form-input-bordered "
        :class="errorClasses"
      />
      
      <datepicker-hijri
        reference="calender"
        :placement="field.placement"
        :date-format="field.format"
        :selected-date="field.selected_date"
        :placeholder="field.name"
        v-model="value"
        />
    </template>
  </DefaultField>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {
  mixins: [FormField, HandlesValidationErrors],
  props: ['resourceName', 'resourceId', 'field'],

  mounted() {
      var scriptTag = document.createElement("script");
      scriptTag.src = "//cdn.jsdelivr.net/gh/abublihi/datepicker-hijri@v1.1/build/datepicker-hijri.js";
      scriptTag.id = "my-datatable";
      document.getElementsByTagName('head')[0].appendChild(scriptTag);
    },

  methods: {

    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      // console.log('field', this.field);
      console.log('value', [...this.field]);
      // console.log('formData', formData);
      formData.append(this.field.attribute, this.value || '')
    },
  },
}
</script>

<css>

</css>