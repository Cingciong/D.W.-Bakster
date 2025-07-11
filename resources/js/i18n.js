import { createI18n } from 'vue-i18n'
import pl from './locales/pl.js'
import en from './locales/en.js'

const messages = {
  pl,
  en
}

// Get saved language from localStorage or default to 'pl'
const savedLanguage = localStorage.getItem('language') || 'pl'

const i18n = createI18n({
  legacy: false, // Use Composition API mode
  locale: savedLanguage,
  fallbackLocale: 'pl',
  messages
})

export default i18n
