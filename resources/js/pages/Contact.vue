<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <PageHeader
      title="Kontakt"
      description="Skontaktuj się z nami"
    />

    <!-- Contact Content -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Contact Info -->
        <div class="bg-white rounded-lg shadow-md p-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Informacje Kontaktowe</h2>

          <div class="space-y-6 mb-8">
            <div class="flex items-start">
              <div class="flex-shrink-0">
                <span class="text-2xl">📍</span>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-900">Adres</h3>
                <p class="text-gray-600">ul. Przykładowa 123<br>84-230 Rumia, Polska</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0">
                <span class="text-2xl">📞</span>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-900">Telefon</h3>
                <p class="text-gray-600">+48 123 456 789</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0">
                <span class="text-2xl">✉️</span>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-900">Email</h3>
                <p class="text-gray-600">kontakt@bakster.pl</p>
              </div>
            </div>

            <div class="flex items-start">
              <div class="flex-shrink-0">
                <span class="text-2xl">🕒</span>
              </div>
              <div class="ml-4">
                <h3 class="text-lg font-semibold text-gray-900">Godziny Recepcji</h3>
                <p class="text-gray-600">7-22 zawsze do Twojej dyspozycji</p>
              </div>
            </div>
          </div>

          <!-- Location Map -->
          <div class="border-t pt-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">🗺️ Znajdź nas na mapie</h3>
            <div class="rounded-lg overflow-hidden shadow-md">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.50856339804963!2d18.384119798693582!3d54.79996476597261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fdb34d0983150d%3A0xd8fd6a71538f19b9!2sBakster!5e0!3m2!1spl!2sus!4v1751551728778!5m2!1spl!2sus"
                width="100%"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="w-full"
              ></iframe>
            </div>
            <p class="text-sm text-gray-500 mt-2 text-center">
              Kliknij na mapę, aby uzyskać wskazówki dojazdu
            </p>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-md p-8">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Napisz do Nas</h2>

          <!-- Success/Error Alert -->
          <div v-if="showAlert" class="mb-6 p-4 rounded-md" :class="{
            'bg-green-50 border border-green-200': alertType === 'success',
            'bg-red-50 border border-red-200': alertType === 'error'
          }">
            <div class="flex">
              <div class="flex-shrink-0">
                <span v-if="alertType === 'success'" class="text-green-400 text-xl">✅</span>
                <span v-else class="text-red-400 text-xl">❌</span>
              </div>
              <div class="ml-3 flex-1">
                <p :class="{
                  'text-green-800': alertType === 'success',
                  'text-red-800': alertType === 'error'
                }">
                  {{ alertMessage }}
                </p>
              </div>
              <div class="ml-auto pl-3">
                <button @click="closeAlert" :class="{
                  'text-green-400 hover:text-green-600': alertType === 'success',
                  'text-red-400 hover:text-red-600': alertType === 'error'
                }">
                  <span class="text-xl">&times;</span>
                </button>
              </div>
            </div>
          </div>

          <form @submit="submitForm" class="space-y-6">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Imię i Nazwisko</label>
              <input
                type="text"
                id="name"
                v-model="form.name"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                :class="{ 'border-red-300': errors.name }"
                placeholder="Twoje imię i nazwisko"
              >
              <p v-if="errors.name" class="mt-1 text-sm text-red-600">{{ errors.name[0] }}</p>
            </div>

            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
              <input
                type="email"
                id="email"
                v-model="form.email"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                :class="{ 'border-red-300': errors.email }"
                placeholder="twoj@email.com"
              >
              <p v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email[0] }}</p>
            </div>

            <div>
              <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Temat</label>
              <input
                type="text"
                id="subject"
                v-model="form.subject"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                :class="{ 'border-red-300': errors.subject }"
                placeholder="Temat wiadomości"
              >
              <p v-if="errors.subject" class="mt-1 text-sm text-red-600">{{ errors.subject[0] }}</p>
            </div>

            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Wiadomość</label>
              <textarea
                id="message"
                rows="6"
                v-model="form.message"
                class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                :class="{ 'border-red-300': errors.message }"
                placeholder="Twoja wiadomość..."
              ></textarea>
              <p v-if="errors.message" class="mt-1 text-sm text-red-600">{{ errors.message[0] }}</p>
            </div>

            <button
              type="submit"
              :disabled="isSubmitting"
              class="w-full py-3 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200"
              :class="{
                'bg-blue-600 text-white hover:bg-blue-700': !isSubmitting,
                'bg-gray-400 text-gray-700 cursor-not-allowed': isSubmitting
              }"
            >
              <span v-if="isSubmitting">Wysyłanie...</span>
              <span v-else>Wyślij Wiadomość</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import PageHeader from '../components/PageHeader.vue'

// Form data
const form = ref({
  name: '',
  email: '',
  subject: '',
  message: ''
})

// State
const isSubmitting = ref(false)
const showAlert = ref(false)
const alertType = ref('') // 'success' or 'error'
const alertMessage = ref('')
const errors = ref({})

// Submit form
const submitForm = async (event) => {
  event.preventDefault()

  // Reset previous state
  isSubmitting.value = true
  errors.value = {}
  showAlert.value = false

  try {
    // Use global axios which should have CSRF token configured
    const response = await window.axios.post('/contact', form.value)

    if (response.data.success) {
      // Success
      alertType.value = 'success'
      alertMessage.value = response.data.message
      showAlert.value = true

      // Reset form
      form.value = {
        name: '',
        email: '',
        subject: '',
        message: ''
      }

      // Hide alert after 5 seconds
      setTimeout(() => {
        showAlert.value = false
      }, 5000)
    }

  } catch (error) {
    console.error('Form submission error:', error);

    if (error.response?.status === 422) {
      // Validation errors
      errors.value = error.response.data.errors
      alertType.value = 'error'
      alertMessage.value = 'Sprawdź poprawność wprowadzonych danych.'
    } else {
      // Other errors
      alertType.value = 'error'
      alertMessage.value = error.response?.data?.message || 'Wystąpił błąd podczas wysyłania wiadomości.'
    }
    showAlert.value = true

    // Hide alert after 5 seconds
    setTimeout(() => {
      showAlert.value = false
    }, 5000)
  } finally {
    isSubmitting.value = false
  }
}

// Close alert manually
const closeAlert = () => {
  showAlert.value = false
}
</script>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
