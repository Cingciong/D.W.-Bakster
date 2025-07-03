<template>
  <div class="relative inline-block text-left">
    <button
      @click="isOpen = !isOpen"
      class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors"
      :class="buttonClasses"
    >
      <span class="mr-2">{{ currentFlag }}</span>
      <span>{{ currentLanguage }}</span>
      <svg
        class="ml-2 h-4 w-4 transition-transform"
        :class="{ 'rotate-180': isOpen }"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </button>

    <!-- Dropdown Menu -->
    <div
      v-if="isOpen"
      class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 z-50"
    >
      <div class="py-1">
        <button
          v-for="language in languages"
          :key="language.code"
          @click="changeLanguage(language.code)"
          class="flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition-colors"
          :class="{ 'bg-blue-50 text-blue-700': $i18n.locale === language.code }"
        >
          <span class="mr-3">{{ language.flag }}</span>
          <span>{{ language.name }}</span>
        </button>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { useI18n } from 'vue-i18n'

const props = defineProps({
  variant: {
    type: String,
    default: 'navbar', // 'navbar' or 'footer'
    validator: (value) => ['navbar', 'footer'].includes(value)
  }
})

const { locale } = useI18n()
const isOpen = ref(false)

const languages = [
  { code: 'pl', name: 'Polski', flag: '🇵🇱' },
  { code: 'en', name: 'English', flag: '🇬🇧' }
]

const currentLanguage = computed(() => {
  const lang = languages.find(l => l.code === locale.value)
  return lang ? lang.name : 'Polski'
})

const currentFlag = computed(() => {
  const lang = languages.find(l => l.code === locale.value)
  return lang ? lang.flag : '🇵🇱'
})

const buttonClasses = computed(() => {
  if (props.variant === 'navbar') {
    return 'text-gray-700 hover:text-primary-500 bg-white/20 hover:bg-white/30'
  } else {
    return 'text-gray-300 hover:text-white bg-gray-700 hover:bg-gray-600'
  }
})

const changeLanguage = (langCode) => {
  locale.value = langCode
  localStorage.setItem('locale', langCode)
  isOpen.value = false
}

// Close dropdown when clicking outside
const closeDropdown = (event) => {
  if (!event.target.closest('.relative')) {
    isOpen.value = false
  }
}

onMounted(() => {
  document.addEventListener('click', closeDropdown)
})

onUnmounted(() => {
  document.removeEventListener('click', closeDropdown)
})
</script>

<style scoped>
.rotate-180 {
  transform: rotate(180deg);
}
</style>
