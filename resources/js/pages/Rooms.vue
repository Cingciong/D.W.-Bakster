<script setup>
// Strona pokoi - bezpośrednie użycie komponentów
import RoomCard from '../components/RoomCard.vue'
import PageHeader from '../components/PageHeader.vue'

// Obsługa rezerwacji pokoju
const handleRoomBooking = (roomData) => {
  console.log('Rezerwacja pokoju:', roomData)
  // Tutaj można dodać logikę nawigacji lub rezerwacji
}

// Function to scroll to pricing section
const scrollToPricing = () => {
  const element = document.getElementById('cennik-section')
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' })
  }
}
</script>

<template>
  <div class="min-h-screen bg-yellow-50 pb-10">
    <!-- Nagłówek -->
    <PageHeader
      title="Nasze <span class='text-teal'>Pokoje</span>"
      description="Wybierz idealny pokój dla swojego pobytu"
    />

    <!-- Zobacz Cennik Button -->
    <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 text-center mt-4 select-none">
      <button
        @click="scrollToPricing"
        class="inline-flex items-center px-4 py-3 bg-teal-600/70  text-white cursor-pointer font-medium text-lg rounded-lg hover:bg-teal-600 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1 animate-fade-up animate-delay-200"
      >
        <svg class="w-10 h-10 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
        </svg>
        Zobacz Cennik
      </button>
    </div>

    <!-- Siatka pokoi -->
    <div class="max-w-screen-2xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 gap-12">

       <!-- Pokój Jednosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-100"
          title="Pokój Jednosobowy"
          description="Komfortowy pokój dla jednej osoby z widokiem na ogród. Idealny na spokojny wypoczynek nad morzem."
          img-link="/img/1-osobowe/untitled-1.JPG"
          color="#3b82f6"
          room-slug="jednosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 1 osoba</li>
          <li>• 14 m²</li>
          <li>• Łóżko pojedyncze</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Mini-lodówka, czajnik</li>
          <li>• Mały zestaw kosmetyków, suszarka</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Pokój Dwuosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-200"
          title="Pokój Dwuosobowy"
          description="Przytulny pokój dla dwóch osób z balkonem i podwójnym łóżkiem."
          img-link="/img/2-osobowe/untitled-7.JPG"
          color="#10b981"
          room-slug="dwuosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 2 osoby</li>
          <li>• 16–23 m²</li>
          <li>• Łóżko podwójne</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Mini-lodówka, czajnik</li>
          <li>• Mały zestaw kosmetyków, suszarka</li>
          <li>• Balkon ze stoliczkiem i krzesłami</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Pokój Dwuosobowy Economy -->
        <RoomCard
          class="animate-fade-up animate-delay-300"
          title="Pokój Dwuosobowy Economy"
          description="Funkcjonalny pokój dla dwóch osób z podstawowym wyposażeniem i dostępem do wszystkich udogodnień."
          img-link="/img/2-osobowy-economy/untitled-2.JPG"
          color="#6366f1"
          room-slug="dwuosobowy-economy"
          @book-room="handleRoomBooking"
        >
          <li>• 2 osoby</li>
          <li>• 16 m²</li>
          <li>• Łóżko podwójne</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Mini-lodówka, czajnik</li>
          <li>• Mały zestaw kosmetyków, suszarka</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Pokój Trzyosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-500"
          title="Pokój Trzyosobowy"
          description="Przestronny pokój dla trzech osób z balkonem i wygodnymi łóżkami."
          img-link="/img/3-osobowy/untitled-6.JPG"
          color="#059669"
          room-slug="trzyosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 3 osoby</li>
          <li>• 29 m²</li>
          <li>• Łóżko podwójne + łóżko pojedyncze</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Mini-lodówka, czajnik</li>
          <li>• Mały zestaw kosmetyków, suszarka</li>
          <li>• Balkon ze stoliczkiem i krzesłami</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Pokój Trzyosobowy Standard -->
        <RoomCard
          class="animate-fade-up animate-delay-700"
          title="Pokój Trzyosobowy Standard"
          description="Wygodny pokój dla trzech osób z większą przestrzenią i lepszym standardem wyposażenia."
          img-link="/img/3-osobowy-standard/untitled-1.JPG"
          color="#7c3aed"
          room-slug="trzyosobowy-standard"
          @book-room="handleRoomBooking"
        >
          <li>• 3 osoby</li>
          <li>• ok. 32–35 m²</li>
          <li>• Łóżko podwójne + łóżko pojedyncze</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Mały zestaw kosmetyków, suszarka</li>
          <li>• Balkon ze stoliczkiem i krzesłami</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Pokój Trzyosobowy z Widokiem na Morze -->
        <RoomCard
          class="animate-fade-up animate-delay-[900ms]"
          title="Pokój Trzyosobowy z Widokiem na Morze"
          description="Ekskluzywny pokój z balkonem i pięknym widokiem na Bałtyk."
          img-link="/img/3-osobowe-widok/untitled-4.JPG"
          color="#0891b2"
          room-slug="trzyosobowy-morze"
          @book-room="handleRoomBooking"
        >
          <li>• 3 osoby</li>
          <li>• 35–40 m²</li>
          <li>• Łóżko podwójne + pojedyncze</li>
          <li>• Prywatna łazienka z przysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Mały zestaw kosmetyków, suszarka</li>
          <li>• Balkon ze stoliczkiem i krzesłami</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Pokój Czteroosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-[1100ms]"
          title="Pokój Czteroosobowy"
          description="Idealny dla rodzin – przestronny pokój z balkonem i kompletnym wyposażeniem."
          img-link="/img/4-osobowe/untitled-1.JPG"
          color="#f97316"
          room-slug="czteroosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 4 osoby</li>
          <li>• 29–32 m²</li>
          <li>• Łóżko podwójne + dwa pojedyncze</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Płaski Telewizor</li>
          <li>• Lodówka, czajnik</li>
          <li>• Mały zestaw kosmetyków</li>
          <li>• Balkon ze stoliczkiem i krzesłami</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

        <!-- Apartament Dwupoziomowy -->
        <RoomCard
          class="animate-fade-up animate-delay-[1300ms]"
          title="Apartament Dwupoziomowy"
          description="Luksusowy apartament z pięknym widokiem na morze – idealny na dłuższy pobyt lub rodzinne wakacje."
          img-link="/img/apartament/untitled-7.JPG"
          color="#dc2626"
          room-slug="apartament-dwupoziomowy"
          @book-room="handleRoomBooking"
        >
          <li>• 4–6 osób</li>
          <li>• ok. 60–80 m²</li>
          <li>• 2 poziomy: sypialnia + salon z kuchnią</li>
          <li>• Łóżko podwójne + 2 pojedyncze</li>
          <li>• Aneks kuchenny, jadalnia, balkon</li>
          <li>• 2 łazienki (w tym jedna z narożną wanną)</li>
          <li>• Płaski telewizor</li>
          <li>• Lodówka, czajnik, pełne wyposażenie</li>
          <li>• Mały zestaw kosmetyków</li>
          <li>• Widok na morze z balkonu i okien dachowych</li>
          <li>• Bezpłatne miejsce parkingowe</li>
          <li>• Śniadanie w cenie</li>
        </RoomCard>

      </div>
    </div>
    <!-- Cennik -->
      <div id="cennik-section" class="mt-16 max-w-screen-2xl mx-auto px-4">
        <div class="bg-white rounded-lg shadow-lg p-12 animate-fade-up animate-delay-[1500ms]">
          <h2 class="text-5xl font-bold text-gray-900 mb-12 text-center">
            <span class="text-teal">Cennik</span> Noclegu
          </h2>

          <!-- Ceny sezonowe -->
          <div class="grid md:grid-cols-2 gap-12 mb-12">
            <!-- Sezon niski -->
            <div class="bg-blue-50 border-l-4 border-blue-500 p-8 rounded-r-lg">
              <h3 class="text-2xl font-semibold text-blue-700 mb-4">Sezon Niski</h3>
              <p class="text-lg text-gray-600 mb-4">maj, czerwiec, wrzesień</p>
              <div class="text-4xl font-bold text-blue-600">
                od 100,00 zł
                <span class="text-lg font-normal text-gray-600 block">za dobę/osobę</span>
              </div>
            </div>

            <!-- Sezon wysoki -->
            <div class="bg-orange-50 border-l-4 border-orange-500 p-8 rounded-r-lg">
              <h3 class="text-2xl font-semibold text-orange-700 mb-4">Sezon Wysoki</h3>
              <p class="text-lg text-gray-600 mb-4">lipiec, sierpień</p>
              <div class="text-4xl font-bold text-orange-600">
                od 120,00 zł
                <span class="text-lg font-normal text-gray-600 block">za dobę/osobę</span>
              </div>
            </div>
          </div>

          <!-- Informacje dodatkowe -->
          <div class="space-y-8 text-gray-700">
            <!-- Śniadanie i Parking obok siebie -->
            <div class="grid md:grid-cols-2 gap-8">
              <div class="bg-green-50 border border-green-200 rounded-lg p-6">
                <div class="flex items-center mb-4">
                  <span class="text-green-600 text-3xl mr-3">🍽️</span>
                  <span class="font-semibold text-green-700 text-xl">Śniadanie w cenie</span>
                </div>
                <p class="text-base">Śniadanie serwowane jest w formie szwedzkiego stołu.</p>
              </div>

              <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-center mb-4">
                  <span class="text-blue-600 text-3xl mr-3">🚗</span>
                  <span class="font-semibold text-blue-700 text-xl">Bezpłatny parking</span>
                </div>
                <p class="text-base">Parking niestrzeżony dla wszystkich gości pensjonatu.</p>
              </div>
            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 space-y-3 text-base">
              <p class="text-lg"><strong>Uwagi:</strong></p>
              <ul class="space-y-2 ml-4">
                <li>• Podane ceny są orientacyjne i mogą podlegać negocjacjom w zależności od ilości osób i długości pobytu</li>
                <li>• W cenie nie ujęto obowiązującej opłaty miejscowej, której wysokość ogłasza Uchwała Rady Miejskiej Władysławowa (dostępna w Recepcji Pensjonat Bakster)</li>
                <li>• Jesteśmy płatnikami VAT i wystawiamy faktury za pobyt w naszym obiekcie</li>
              </ul>
            </div>
          </div>

          <!-- Call to action -->
          <div class="mt-12 text-center">
            <div class="bg-cyan-50 border border-cyan-200 rounded-lg p-6">
              <p class="text-cyan-600 font-medium mb-3 text-xl">Masz pytania dotyczące cen?</p>
              <p class="text-base text-gray-600">Skontaktuj się z nami, aby uzyskać indywidualną wycenę dla Twojego pobytu.</p>
            </div>
          </div>
        </div>
      </div>

  </div>

</template>

<style scoped>
:deep(.hero-bg) {
  background-image: url('/img/main.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Custom grid dla pokoi - ostatnie 2 karty się rozszerzą */
.rooms-grid {
  display: grid;
  gap: 2rem;
  grid-template-columns: 1fr;
}

/* Na tablet - 2 kolumny */
@media (min-width: 768px) {
  .rooms-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* Na desktop - 3 kolumny normalnie, ale ostatnie 2 karty się rozszerzą */
@media (min-width: 1024px) {
  .rooms-grid {
    grid-template-columns: repeat(3, 1fr);
  }

  /* Ostatnie 2 elementy (7 i 8) będą zajmować po 1.5 kolumny */
  .rooms-grid > :nth-child(7) {
    grid-column: span 2;
    max-width: calc(150% - 1rem); /* 1.5 kolumny minus gap */
  }

  .rooms-grid > :nth-child(8) {
    grid-column: span 2;
    max-width: calc(150% - 1rem); /* 1.5 kolumny minus gap */
  }

  /* Alternatywnie - można sprawić by ostatnie 2 elementy zajęły całą szerokość */
  /* Odkomentuj poniższe jeśli chcesz żeby ostatni rząd miał po 2 duże karty */
  /*
  .rooms-grid > :nth-child(7),
  .rooms-grid > :nth-child(8) {
    grid-column: span 3;
    max-width: 50%;
    margin: 0 auto;
  }
  */
}

/* Na bardzo dużych ekranach - 4 kolumny normalnie */
@media (min-width: 1280px) {
  .rooms-grid {
    grid-template-columns: repeat(4, 1fr);
  }

  /* Reset dla bardzo dużych ekranów */
  .rooms-grid > :nth-child(7),
  .rooms-grid > :nth-child(8) {
    grid-column: span 1;
    max-width: none;
  }
}
</style>
