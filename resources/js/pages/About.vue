<template>
  <div class="min-h-screen bg-yellow-50">
    <!-- Header -->
    <PageHeader
      title='O <span class="text-teal">Nas</span>'
      description="Poznaj nasz Pensjonat"
    />

    <!-- About Content -->
    <div class="max-w-screen-2xl mx-auto px-4 py-8 sm:px-6 lg:px-8 ">
      <!-- Main Story -->
      <div class="bg-white rounded-lg shadow-md  mb-8 animate-fade-up animate-delay-100">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
          <div class="p-8">
            <h2 class="text-5xl font-bold text-gray-900 mb-6">O Pensjonacie</h2>
            <p class="text-2xl text-gray-600 mb-6 leading-relaxed">
              Pensjonat Bakster to przytulny pensjonat nad morzem, oferujący komfortowe warunki
              wypoczynku dla par, rodzin i grup przyjaciół. Do dyspozycji Gości oddajemy 19 wygodnych pokoi z prywatną
               łazienką, dostępem do Wi-Fi, telewizji satelitarnej, lodówką, czajnikem oraz kompletem
               naczyń (szklanka, filiżanka, talerz, sztućce).
            </p>
            <p class="text-2xl text-gray-600 mb-6 leading-relaxed">
              W każdym pokoju znajduje się również parawan, koc plażowy i leżak – idealne
               wyposażenie na słoneczne dni spędzone nad morzem.
            </p>
            <p class="text-2xl text-gray-600 leading-relaxed">
              Dla bardziej wymagających Gości oferujemy
              przestronny, dwupoziomowy apartament.
            </p>
          </div>
          <div class="rounded-lg h-full  w-auto my-auto overflow-hidden  pensjonat-bg ">
          </div>
        </div>
      </div>

      <!-- Values -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">


                        <div class="bg-white rounded-lg shadow-md p-8 text-center animate-fade-up animate-delay-200">
          <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl">🍳</span>
          </div>
          <h3 class="text-3xl font-semibold text-gray-900 mb-4">Darmowe śniadania</h3>
          <ul class="text-xl text-gray-600 list-disc list-inside mb-3 space-y-2">
            <li>Pyszne śniadanie serwowane codziennie</li>
            <li>Świeże produkty lokalne</li>
            <li>Różnorodne opcje dla każdego</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 text-center animate-fade-up animate-delay-300">
          <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl">📍</span>
          </div>
          <h3 class="text-3xl font-semibold text-gray-900 mb-4">Doskonała lokalizacja</h3>
          <ul class="text-xl text-gray-600 list-disc list-inside mb-3 space-y-2">
            <li>8 minut spacerem do centrum miasta</li>
            <li>2 minuty do najbliższego sklepu otwartego do późna</li>
            <li>Restauracje z domowymi obiadami w promieniu 2–3 minut</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 text-center animate-fade-up animate-delay-500">
          <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl">🅿️</span>
          </div>
          <h3 class="text-3xl font-semibold text-gray-900 mb-4">Darmowy parking</h3>
          <ul class="text-xl text-gray-600 list-disc list-inside mb-3 space-y-2">
            <li>Monitorowany parking na około 18 samochodów</li>
            <li>Bezpieczne, zamykane miejsce na rowery</li>
            <li>Parking dostępny dla wszystkich gości bez dodatkowych opłat</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 text-center animate-fade-up animate-delay-700">
          <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl">👨‍👩‍👧‍👦</span>
          </div>
          <h3 class="text-3xl font-semibold text-gray-900 mb-4">Komfortowe zakwaterowanie</h3>
          <ul class="text-xl text-gray-600 list-disc list-inside mb-3 space-y-2">
            <li>19 w pełni wyposażonych pokoi z łazienkami</li>
            <li>Dwupoziomowy apartament dla bardziej wymagających</li>
            <li>Na wyposażeniu: Wi-Fi, TV satelitarna, lodówka, czajnik, zestaw naczyń</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 text-center animate-fade-up animate-delay-[900ms]">
          <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl">🤝</span>
          </div>
          <h3 class="text-3xl font-semibold text-gray-900 mb-4">Bezpieczeństwo i wygoda</h3>
          <ul class="text-xl text-gray-600 list-disc list-inside mb-3 space-y-2">
            <li>Monitorowany parking dla 18 samochodów</li>
            <li>Zamykane, bezpieczne miejsce na rowery</li>
            <li>Całodobowy monitoring i ochrona renomowanej firmy</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-8 text-center animate-fade-up animate-delay-[1100ms]">
          <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl">🛌</span>
          </div>
          <h3 class="text-3xl font-semibold text-gray-900 mb-4">Przyjazny rodzinom</h3>
          <ul class="text-xl text-gray-600 list-disc list-inside mb-3 space-y-2">
            <li>Kącik zabaw dla dzieci wewnątrz budynku</li>
            <li>Mini plac zabaw na świeżym powietrzu</li>
            <li>Miejsce do grillowania z dużym kamiennym grillem – idealne na rodzinne wieczory</li>
          </ul>
        </div>






 </div>



      <!-- Team -->

    </div>
</div>

</template>

<script setup>
import PageHeader from '../components/PageHeader.vue'
// Strona o nas - About us page
</script>

<style scoped>
.hero-bg {
  background-image: url('/img/main.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.pensjonat-bg {
  background-image: url('/img/pensjonat.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-color: #f8fafc;
}
</style>
