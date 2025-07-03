<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="hero-bg min-h-[400px] flex flex-col justify-center items-center text-center">
      <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-6xl font-bold text-white sm:text-7xl lg:text-8xl">404</h1>
        <p class="mt-4 text-xl text-white max-w-3xl mx-auto bg-white/30 rounded-3xl px-6 py-3">Strona nie została znaleziona</p>
      </div>
    </div>

    <!-- 404 Content -->
    <div class="max-w-7xl mx-auto px-4 py-16 sm:px-6 lg:px-8">
      <div class="text-center">
        <div class="bg-white rounded-lg shadow-md p-12 max-w-2xl mx-auto">
          <div class="w-32 h-32 bg-gradient-to-br from-red-400 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-8">
            <span class="text-white text-6xl">😕</span>
          </div>

          <h2 class="text-3xl font-bold text-gray-900 mb-4">Ups! Coś poszło nie tak</h2>
          <p class="text-lg text-gray-600 mb-8">
            Przepraszamy, ale strona której szukasz nie istnieje lub została przeniesiona.
          </p>

          <div class="space-y-4">
            <p class="text-gray-600">Możesz spróbować:</p>
            <ul class="text-left text-gray-600 space-y-2 max-w-md mx-auto">
              <li class="flex items-center">
                <span class="text-blue-500 mr-2">•</span>
                Sprawdzić adres URL pod kątem błędów
              </li>
              <li class="flex items-center">
                <span class="text-blue-500 mr-2">•</span>
                Wrócić do strony głównej
              </li>
              <li class="flex items-center">
                <span class="text-blue-500 mr-2">•</span>
                Skorzystać z nawigacji powyżej
              </li>
            </ul>
          </div>

          <div class="mt-8 space-x-4">
            <router-link
              to="/"
              class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-500 hover:bg-primary-600 transition-colors duration-200"
            >
              🏠 Strona Główna
            </router-link>

            <router-link
              to="/pokoje"
              class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200"
            >
              🛏️ Zobacz Pokoje
            </router-link>
          </div>
        </div>

        <!-- Popular Pages -->
        <div class="mt-16">
          <h3 class="text-2xl font-bold text-gray-900 mb-8">Popularne strony</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <router-link
              to="/"
              class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300 group"
            >
              <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                <span class="text-white text-2xl">🏠</span>
              </div>
              <h4 class="font-semibold text-gray-900">Strona Główna</h4>
              <p class="text-sm text-gray-600 mt-2">Powrót do głównej strony</p>
            </router-link>

            <router-link
              to="/pokoje"
              class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300 group"
            >
              <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                <span class="text-white text-2xl">🛏️</span>
              </div>
              <h4 class="font-semibold text-gray-900">Pokoje</h4>
              <p class="text-sm text-gray-600 mt-2">Zobacz nasze pokoje</p>
            </router-link>

            <router-link
              to="/galeria"
              class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300 group"
            >
              <div class="w-16 h-16 bg-gradient-to-br from-emerald-400 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                <span class="text-white text-2xl">📷</span>
              </div>
              <h4 class="font-semibold text-gray-900">Galeria</h4>
              <p class="text-sm text-gray-600 mt-2">Zobacz nasze wnętrza</p>
            </router-link>

            <router-link
              to="/kontakt"
              class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-300 group"
            >
              <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-200">
                <span class="text-white text-2xl">📞</span>
              </div>
              <h4 class="font-semibold text-gray-900">Kontakt</h4>
              <p class="text-sm text-gray-600 mt-2">Skontaktuj się z nami</p>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Strona 404 - 404 error page
</script>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
