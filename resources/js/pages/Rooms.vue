<script setup>
// Strona pokoi - bezpośrednie użycie komponentów
import RoomCard from '../components/RoomCard.vue'

// Obsługa rezerwacji pokoju
const handleRoomBooking = (roomData) => {
  console.log('Rezerwacja pokoju:', roomData)
  // Tutaj można dodać logikę nawigacji lub rezerwacji
}
</script>

<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Nagłówek -->
    <div class="hero-bg min-h-[400px] flex flex-col justify-center items-center text-center">
      <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl">Nasze <span class="text-teal">Pokoje</span></h1>
        <p class="mt-4 text-xl text-white max-w-3xl mx-auto bg-white/30 rounded-3xl px-6 py-3">Wybierz idealny pokój dla swojego pobytu</p>
      </div>
    </div>

    <!-- Siatka pokoi -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Pokój Jednosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-100"
          title="Pokój Jednosobowy"
          description="Komfortowy pokój dla jednej osoby z widokiem na ogród. Idealny na spokojny wypoczynek nad morzem."
          price="100-180"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=400&h=300&fit=crop"
          color="#3b82f6"
          room-slug="jednosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 1 osoba</li>
          <li>• 14 m²</li>
          <li>• Łóżko pojedyncze</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Bezpłatne Wi-Fi</li>
          <li>• TV z kanałami naziemnymi i satelitarnymi</li>
          <li>• Mini-lodówka, czajnik, zestaw kawowy</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
        </RoomCard>

        <!-- Pokój Dwuosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-200"
          title="Pokój Dwuosobowy"
          description="Przytulny pokój dla dwóch osób z balkonem i podwójnym łóżkiem."
          price="200-320"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400&h=300&fit=crop"
          color="#10b981"
          room-slug="dwuosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 2 osoby</li>
          <li>• 16-23 m²</li>
          <li>• Łóżko podwójne</li>
          <li>• Prywatna łazienka (część z oknem)</li>
          <li>• Balkon lub okno balkonowe</li>
          <li>• Bezpłatne Wi-Fi</li>
          <li>• TV z płaskim ekranem</li>
          <li>• Mini-lodówka, czajnik, zestaw kawowy</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
        </RoomCard>

        <!-- Pokój Dwuosobowy Economy -->
        <RoomCard
          class="animate-fade-up animate-delay-300"
          title="Pokój Dwuosobowy Economy"
          description="Funkcjonalny pokój dla dwóch osób z podstawowym wyposażeniem i dostępem do wszystkich udogodnień."
          price="150-220"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=400&h=300&fit=crop"
          color="#6366f1"
          room-slug="dwuosobowy-economy"
          @book-room="handleRoomBooking"
        >
          <li>• 2 osoby</li>
          <li>• 16 m²</li>
          <li>• Łóżko podwójne</li>
          <li>• Prywatna łazienka z prysznicem</li>
          <li>• Bezpłatne Wi-Fi</li>
          <li>• TV</li>
          <li>• Mini-lodówka, czajnik</li>
          <li>• Zestaw kawowy i plażowy</li>
        </RoomCard>

        <!-- Pokój Trzyosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-500"
          title="Pokój Trzyosobowy"
          description="Przestronny pokój dla trzech osób z balkonem i wygodnymi łóżkami."
          price="280-400"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=400&h=300&fit=crop"
          color="#059669"
          room-slug="trzyosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 3 osoby</li>
          <li>• 29 m²</li>
          <li>• Łóżko podwójne + łóżko pojedyncze</li>
          <li>• Prywatna łazienka (część z oknem)</li>
          <li>• Balkon</li>
          <li>• TV z kanałami satelitarnymi</li>
          <li>• Mini-lodówka, czajnik, zestaw kawowy</li>
          <li>• Zestaw plażowy: koc, parawan, leżak</li>
        </RoomCard>

        <!-- Pokój Trzyosobowy Standard -->
        <RoomCard
          class="animate-fade-up animate-delay-700"
          title="Pokój Trzyosobowy Standard"
          description="Wygodny pokój dla trzech osób z większą przestrzenią i lepszym standardem wyposażenia."
          price="320-450"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=300&fit=crop"
          color="#7c3aed"
          room-slug="trzyosobowy-standard"
          @book-room="handleRoomBooking"
        >
          <li>• 3 osoby</li>
          <li>• ok. 32-35 m²</li>
          <li>• Łóżko podwójne + sofa rozkładana</li>
          <li>• Prywatna łazienka z wanną</li>
          <li>• Balkon z meblami wypoczynkowymi</li>
          <li>• Minibar, Smart TV</li>
          <li>• Sejf</li>
        </RoomCard>

        <!-- Pokój Trzyosobowy z Widokiem na Morze -->
        <RoomCard
          class="animate-fade-up animate-delay-[900ms]"
          title="Pokój Trzyosobowy z Widokiem na Morze"
          description="Ekskluzywny pokój z balkonem i pięknym widokiem na Bałtyk."
          price="400-580"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=400&h=300&fit=crop"
          color="#0891b2"
          room-slug="trzyosobowy-morze"
          @book-room="handleRoomBooking"
        >
          <li>• 3 osoby</li>
          <li>• 35-40 m²</li>
          <li>• Łóżko podwójne + pojedyncze</li>
          <li>• Prywatna łazienka z wanną</li>
          <li>• Duży balkon z widokiem na morze</li>
          <li>• Minibar premium</li>
          <li>• Smart TV 55"</li>
          <li>• Ekspres do kawy, sejf</li>
        </RoomCard>

        <!-- Pokój Czteroosobowy -->
        <RoomCard
          class="animate-fade-up animate-delay-[1100ms]"
          title="Pokój Czteroosobowy"
          description="Idealny dla rodzin – przestronny pokój z balkonem i kompletnym wyposażeniem."
          price="350-500"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop"
          color="#f97316"
          room-slug="czteroosobowy"
          @book-room="handleRoomBooking"
        >
          <li>• 4 osoby</li>
          <li>• 29-32 m²</li>
          <li>• Łóżko podwójne + dwa pojedyncze</li>
          <li>• Prywatna łazienka (część z oknem)</li>
          <li>• 1 lub 2 balkony</li>
          <li>• TV, lodówka, czajnik, zestaw kawowy</li>
          <li>• Zestaw plażowy i kącik dziecięcy</li>
        </RoomCard>

        <!-- Apartament Dwupoziomowy -->
        <RoomCard
          class="animate-fade-up animate-delay-[1300ms]"
          title="Apartament Dwupoziomowy"
          description="Luksusowy apartament z pięknym widokiem na morze – idealny na dłuższy pobyt lub rodzinne wakacje."
          price="500-750"
          currency="zł"
          period="/noc"
          img-link="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=400&h=300&fit=crop"
          color="#dc2626"
          room-slug="apartament-dwupoziomowy"
          @book-room="handleRoomBooking"
        >
          <li>• 4-6 osób</li>
          <li>• ok. 60-80 m²</li>
          <li>• 2 poziomy: sypialnia + salon z kuchnią</li>
          <li>• Łóżko podwójne + 2 pojedyncze</li>
          <li>• Aneks kuchenny, jadalnia, balkon</li>
          <li>• 2 łazienki (w tym jedna z narożną wanną)</li>
          <li>• Widok na morze z balkonu i okien dachowych</li>
          <li>• TV, lodówka, czajnik, pełne wyposażenie</li>
        </RoomCard>

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
