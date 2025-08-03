<script setup>
import { computed } from 'vue'

const currentYear = computed(() => new Date().getFullYear())
</script>

<template>

  <footer class="bg-blue-100 text-gray-800 relative">
    <div class="absolute top-0 left-0 right-0">
      <hr class="border-0 h-10 bg-gradient-to-b from-yellow-50 to-blue-100" />
    </div>
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 pt-16">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h3 class="text-2xl font-semibold mb-4 text-blue-900">Pensjonat Bakster</h3>
          <p class="text-xl text-gray-700">Sprawimy, że poczujesz się jak w domu nawet z dala od domu.</p>
        </div>

        <div>
          <h3 class="text-2xl font-semibold mb-4 text-blue-900">Podstrony</h3>
          <ul class="space-y-2">
            <li><router-link to="/" class="text-xl text-gray-700 hover:text-blue-800 transition-colors">Główna</router-link></li>
            <li><router-link to="/pokoje" class="text-xl text-gray-700 hover:text-blue-800 transition-colors">Pokoje</router-link></li>
            <li><router-link to="/galeria" class="text-xl text-gray-700 hover:text-blue-800 transition-colors">Galeria</router-link></li>
            <li><router-link to="/kontakt" class="text-xl text-gray-700 hover:text-blue-800 transition-colors">Kontakt</router-link></li>
             <li><router-link to="/regulamin" class="text-xl text-gray-700 hover:text-blue-800 transition-colors">Regulamin</router-link></li>
          </ul>
        </div>

        <div>
          <h3 class="text-2xl font-semibold mb-4 text-blue-900">Kontakt</h3>
          <p class="text-xl text-gray-700">ul. Gawędy 14</p>
          <p class="text-xl text-gray-700">84-120 Władysławowo</p>
          <p class="text-xl text-gray-700">tel./fax. 058/675-24-04</p>
          <p class="text-xl text-gray-700">tel. kom. +48 733 915 030</p>
          <p class="text-xl text-gray-700">e-mail: bakster@bakster.pl</p>
        </div>
      </div>

      <div class="border-t border-blue-200 text-gray-700 mt-8 pt-8 text-center ">
        <p class="text-xl mb-1">&copy; {{ currentYear }} Bakster Hotel. Wszelkie prawa zastrzeżone.</p>
        <p class="text-xl">Strona zrobiona przez <a href="https://www.igormaciejak.org/" class="text-teal font-semibold hover:opacity-55 duration-300">Igor Maciejak</a>.</p>
      </div>
    </div>
  </footer>
</template>
