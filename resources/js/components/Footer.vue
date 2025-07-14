<script setup>
import { computed } from 'vue'

const currentYear = computed(() => new Date().getFullYear())
</script>

<template>
  <footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <h3 class="text-lg font-semibold mb-4">Pensjonat Bakster</h3>
          <p class="text-gray-300">Sprawimy, że poczujesz się jak w domu nawet z dala od domu.</p>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Podstrony</h3>
          <ul class="space-y-2">
            <li><router-link to="/" class="text-gray-300 hover:text-white transition-colors">Główna</router-link></li>
            <li><router-link to="/pokoje" class="text-gray-300 hover:text-white transition-colors">Pokoje</router-link></li>
            <li><router-link to="/galeria" class="text-gray-300 hover:text-white transition-colors">Galeria</router-link></li>
            <li><router-link to="/kontakt" class="text-gray-300 hover:text-white transition-colors">Kontakt</router-link></li>
             <li><router-link to="/regulamin" class="text-gray-300 hover:text-white transition-colors">Regulamin</router-link></li>
          </ul>
        </div>

        <div>
          <h3 class="text-lg font-semibold mb-4">Kontakt</h3>
          <p class="text-gray-300">ul. Gawędy 14</p>
          <p class="text-gray-300">84-120 Władysławowo</p>
          <p class="text-gray-300">tel./fax. 058/675-24-04</p>
          <p class="text-gray-300">tel. kom. +48 733 915 030</p>
          <p class="text-gray-300">e-mail: bakster@bakster.pl</p>
        </div>
      </div>

      <div class="border-t border-gray-700 text-gray-300 mt-8 pt-8 text-center ">
        <p class=" mb-1">&copy; {{ currentYear }} Bakster Hotel. Wszelkie prawa zastrzeżone.</p>
        <p class="">Strona zrobiona przez <a href="https://www.igormaciejak.org/" class="text-teal font-semibold hover:opacity-55 duration-300">Igor Maciejak</a>.</p>
      </div>
    </div>
  </footer>
</template>
