<template>
  <footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h3 class="text-lg font-semibold mb-4">D.W. Bakster</h3>
          <p class="text-gray-300">Sprawimy, że poczujesz się jak w domu nawet z dala od domu.</p>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Podstrony</h3>
          <ul class="space-y-2">
            <li><router-link to="/" class="text-gray-300 hover:text-white transition-colors">Główna</router-link></li>
            <li><router-link to="/rooms" class="text-gray-300 hover:text-white transition-colors">Pokoje</router-link></li>
            <li><router-link to="/gallery" class="text-gray-300 hover:text-white transition-colors">Galeria</router-link></li>
            <li><router-link to="/contact" class="text-gray-300 hover:text-white transition-colors">Kontakt</router-link></li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Kontakt</h3>
          <p class="text-gray-300">Gawędy 14</p>
          <p class="text-gray-300">Władysławowo, 84-120</p>
          <p class="text-gray-300">Tel: +48 58 675 24 04</p>
          <p class="text-gray-300">Email: contact@bakster.com</p>
        </div>
      </div>

      <div class="border-t border-gray-700 mt-8 pt-8 text-center">
        <p class="text-gray-300">&copy; © 2025 Bakster Hotel. Wszelkie prawa zastrzeżone.</p>
      </div>
    </div>
  </footer>
</template>
