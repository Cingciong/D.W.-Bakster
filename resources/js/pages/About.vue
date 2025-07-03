<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="hero-bg min-h-[400px] flex flex-col justify-center items-center text-center">
      <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl">O <span class="text-teal">Nas</span></h1>
        <p class="mt-4 text-xl text-white max-w-3xl mx-auto bg-white/30 rounded-3xl px-6 py-3">Poznaj lepiej Bakster</p>
      </div>
    </div>

    <!-- About Content -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <!-- Main Story -->
      <div class="bg-white rounded-lg shadow-md p-8 mb-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
          <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">O Pensjonacie</h2>
            <p class="text-gray-600 mb-4">
              D.W. Bakster to przytulny pensjonat nad morzem, oferujący komfortowe warunki
              wypoczynku dla par, rodzin i grup przyjaciół. Do dyspozycji Gości oddajemy 19 wygodnych pokoi z prywatną
               łazienką, dostępem do Wi-Fi, telewizji satelitarnej, lodówką, czajnikem oraz kompletem
               naczyń (szklanka, filiżanka, talerz, sztućce).
            </p>
            <p class="text-gray-600 mb-4">
              W każdym pokoju znajduje się również parawan, koc plażowy i leżak – idealne
               wyposażenie na słoneczne dni spędzone nad morzem.
            </p>
            <p class="text-gray-600">
              Dla bardziej wymagających Gości oferujemy
              przestronny, dwupoziomowy apartament.
            </p>
          </div>
          <div class="bg-gradient-to-br from-blue-400 to-blue-600 rounded-lg h-64 flex items-center justify-center">
            <span class="text-white text-8xl">🏨</span>
          </div>
        </div>
      </div>

      <!-- Values -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-2xl">🛌</span>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Przyjazny rodzinom</h3>
          <ul class="text-gray-600 list-disc list-inside mb-3">
            <li>Kącik zabaw dla dzieci wewnątrz budynku</li>
            <li>Mini plac zabaw na świeżym powietrzu</li>
            <li>Miejsce do grillowania z dużym kamiennym grillem – idealne na rodzinne wieczory</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-2xl">👨‍👩‍👧‍👦</span>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Komfortowe zakwaterowanie</h3>
          <ul class="text-gray-600 list-disc list-inside mb-3">
            <li>19 w pełni wyposażonych pokoi z łazienkami</li>
            <li>Dwupoziomowy apartament dla bardziej wymagających</li>
            <li>Na wyposażeniu: Wi-Fi, TV satelitarna, lodówka, czajnik, zestaw naczyń</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-2xl">🤝</span>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Bezpieczeństwo i wygoda</h3>
          <ul class="text-gray-600 list-disc list-inside mb-3">
            <li>Monitorowany parking dla 18 samochodów</li>
            <li>Zamykane, bezpieczne miejsce na rowery</li>
            <li>Całodobowy monitoring i ochrona renomowanej firmy</li>
          </ul>
        </div>
      </div>

      <!-- Additional Features -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-2xl">🛍</span>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Doskonała lokalizacja</h3>
          <ul class="text-gray-600 list-disc list-inside mb-3">
            <li>8 minut spacerem do centrum miasta</li>
            <li>2 minuty do najbliższego sklepu otwartego do późna</li>
            <li>Restauracje z domowymi obiadami w promieniu 2–3 minut</li>
          </ul>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-2xl">🏖</span>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Blisko plaży</h3>
          <ul class="text-gray-600 list-disc list-inside mb-3">
            <li>W każdym pokoju: parawan, koc plażowy i leżak</li>
            <li>Zaledwie 12 minut spacerem do szerokiej, pięknej plaży</li>
            <li>Urokliwa trasa na plażę przez alejki Centralnego Ośrodka Sportu</li>
          </ul>
        </div>
      </div>

      <!-- Location -->
      <div class="bg-white rounded-lg shadow-md p-8 mb-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Nasza Lokalizacja</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
          <div>
            <h3 class="text-xl font-semibold text-gray-900 mb-4">D.W. Bakster</h3>
            <div class="space-y-3 text-gray-600">
              <div class="flex items-start">
                <span class="text-blue-500 mr-3 mt-1">📍</span>
                <div>
                  <p class="font-medium">Adres:</p>
                  <p>ul. Przykładowa 123<br>84-230 Rumia, Polska</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <span class="text-blue-500 mr-3 mt-1">🚗</span>
                <div>
                  <p class="font-medium">Dojazd:</p>
                  <p>Bezpłatny parking dla 18 samochodów</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <span class="text-blue-500 mr-3 mt-1">🏖️</span>
                <div>
                  <p class="font-medium">Odległość od plaży:</p>
                  <p>12 minut spacerem przez malownicze alejki</p>
                </div>
              </div>
              
              <div class="flex items-start">
                <span class="text-blue-500 mr-3 mt-1">🏙️</span>
                <div>
                  <p class="font-medium">Centrum miasta:</p>
                  <p>8 minut spacerem</p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="w-full">
            <div class="rounded-lg overflow-hidden shadow-md">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233.50856339804963!2d18.384119798693582!3d54.79996476597261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fdb34d0983150d%3A0xd8fd6a71538f19b9!2sBakster!5e0!3m2!1spl!2sus!4v1751551728778!5m2!1spl!2sus" 
                width="100%" 
                height="400" 
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
      </div>

      <!-- Team -->
      <div class="bg-white rounded-lg shadow-md p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Nasz Zespół</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
          <div class="text-center">
            <div class="w-24 h-24 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white text-3xl">👨‍💼</span>
            </div>
            <h3 class="text-lg font-semibold text-gray-900">Jan Kowalski</h3>
            <p class="text-gray-600">Dyrektor Hotelu</p>
          </div>

          <div class="text-center">
            <div class="w-24 h-24 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white text-3xl">👩‍💼</span>
            </div>
            <h3 class="text-lg font-semibold text-gray-900">Anna Nowak</h3>
            <p class="text-gray-600">Menedżer Recepcji</p>
          </div>

          <div class="text-center">
            <div class="w-24 h-24 bg-gradient-to-r from-emerald-400 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-white text-3xl">👨‍🍳</span>
            </div>
            <h3 class="text-lg font-semibold text-gray-900">Michał Wiśniewski</h3>
            <p class="text-gray-600">Szef Kuchni</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Strona o nas - About us page
</script>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
