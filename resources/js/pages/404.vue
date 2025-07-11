<script setup>
import PageHeader from '../components/PageHeader.vue'
import { useRouter } from 'vue-router'

const router = useRouter()

const goHome = () => {
  router.push('/')
}

const goBack = () => {
  router.back()
}
</script>

<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <PageHeader
      title="Strona nie znaleziona"
      description="404 - Nie mogliśmy znaleźć tej strony"
    />

    <!-- 404 Content -->
    <div class="max-w-3xl mx-auto px-4 py-16 sm:px-6 lg:px-8 text-center">
      <div class="bg-white rounded-lg shadow-md p-8">
        <div class="text-6xl mb-8">🏨</div>
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Ups! Strona nie istnieje</h2>
        <p class="text-gray-600 mb-8">
          Przepraszamy, ale strona której szukasz nie została znaleziona.
          Możliwe, że została przeniesiona lub nie istnieje.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button
            @click="goHome"
            class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors"
          >
            Wróć na stronę główną
          </button>
          <button
            @click="goBack"
            class="px-6 py-3 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors"
          >
            Wróć do poprzedniej strony
          </button>
        </div>
      </div>

      <!-- Sekcja kontaktowa -->
      <div class="mt-8 bg-white rounded-lg shadow-md p-8 text-center">
        <h3 class="text-xl font-bold text-gray-800 mb-4">Potrzebujesz pomocy?</h3>
        <p class="text-gray-600 mb-6">Skontaktuj się z nami bezpośrednio</p>
        <div class="flex flex-col md:flex-row justify-center items-center space-y-2 md:space-y-0 md:space-x-8 text-gray-700">
          <div class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
            </svg>
            <span>ul. Gawędy 14, 84-120 Władysławowo</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
            </svg>
            <span>058/675-24-04 | +48 733 915 030</span>
          </div>
          <div class="flex items-center">
            <svg class="w-5 h-5 mr-2 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
              <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
            </svg>
            <span>bakster@bakster.pl</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
