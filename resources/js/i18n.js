import { createI18n } from 'vue-i18n'
import pl from './locales/pl.js'
import en from './locales/en.js'

// Get saved language from localStorage or default to Polish
const savedLocale = localStorage.getItem('locale') || 'pl'

const i18n = createI18n({
  locale: savedLocale,
  fallbackLocale: 'pl',
  legacy: false,
  messages: {
    pl,
    en
  }
})

export default i18n
