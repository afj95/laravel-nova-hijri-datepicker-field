import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-hijri-date-picker', IndexField)
  app.component('detail-hijri-date-picker', DetailField)
  app.component('form-hijri-date-picker', FormField)
})
