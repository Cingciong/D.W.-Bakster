<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="hero-bg min-h-[400px] flex flex-col justify-center items-center text-center">
      <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl">Galeria</h1>
        <p class="mt-4 text-xl text-white max-w-3xl mx-auto bg-white/30 rounded-3xl px-6 py-3">Zobacz nasze wnętrza i udogodnienia</p>
      </div>
    </div>

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
    </div>
  </div>
</template>

<script setup>
// Strona galerii - Gallery page
</script>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
