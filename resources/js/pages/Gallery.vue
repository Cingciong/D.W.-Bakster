<script setup>
import PageHeader from '../components/PageHeader.vue'
</script>

<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <PageHeader
      title="Galeria"
      description="Zobacz nasze wnętrza i udogodnienia"
    />

    <!-- Gallery Content -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <!-- Categories -->
      <div class="flex flex-wrap gap-4 mb-8 justify-center">
        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
          Wszystkie
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
          Pokoje
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
          Lobby
        </button>
        <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
          Jadalnia
        </button>
          <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
          Okolice
        </button>
      </div>

      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Hotel Rooms -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
            <span class="text-white text-4xl">🛏️</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Pokój Standard</h3>
            <p class="text-sm text-gray-600">Komfortowy pokój jednosobowy</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
            <span class="text-white text-4xl">🛏️</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Pokój XYZ</h3>
            <p class="text-sm text-gray-600">Przestronny pokój z balkonem</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-emerald-400 to-emerald-600 flex items-center justify-center">
            <span class="text-white text-4xl">🏠</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Apartament</h3>
            <p class="text-sm text-gray-600">Luksusowy apartament z kuchnią</p>
          </div>
        </div>

        <!-- Lobby -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center">
            <span class="text-white text-4xl">🏨</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Lobby</h3>
            <p class="text-sm text-gray-600">Pomarańczowe lobby</p>
          </div>
        </div>

        <!-- Restaurant -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-red-400 to-pink-500 flex items-center justify-center">
            <span class="text-white text-4xl">🍽️</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">jadalnia</h3>
            <p class="text-sm text-gray-600">XD</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center">
            <span class="text-white text-4xl">REedacted</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Kawiarnia</h3>
            <p class="text-sm text-gray-600">>REedacted</p>
          </div>
        </div>

        <!-- Spa & Wellness -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-teal-400 to-cyan-500 flex items-center justify-center">
            <span class="text-white text-4xl">>REedacted</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Spa</h3>
            <p class="text-sm text-gray-600">>REedacted</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
            <span class="text-white text-4xl">>REedacted</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">>REedacted</h3>
            <p class="text-sm text-gray-600">>REedacted</p>
          </div>
        </div>

        <!-- Additional Facilities -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
            <span class="text-white text-4xl">>REedacted</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">>REedacted</h3>
            <p class="text-sm text-gray-600">>REedacted</p>
          </div>
        </div>
      <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-green-400 to-blue-500 flex items-center justify-center">
            <span class="text-white text-4xl">>REedacted</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">>REedacted</h3>
            <p class="text-sm text-gray-600">>REedacted</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
          <div class="h-48 bg-gradient-to-br from-amber-400 to-orange-500 flex items-center justify-center">
            <span class="text-white text-4xl">🚗</span>
          </div>
          <div class="p-4">
            <h3 class="font-semibold text-gray-900">Parking</h3>
            <p class="text-sm text-gray-600">Bezpieczny parking</p>
          </div>
        </div>

      </div>

      <!-- Sekcja kontaktowa -->
      <div class="mt-16 bg-white rounded-lg shadow-lg p-8 text-center">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Masz pytania o nasze udogodnienia?</h3>
        <p class="text-gray-600 mb-6">Skontaktuj się z nami</p>
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
