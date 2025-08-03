<script setup>
import PageHeader from '../components/PageHeader.vue'
import GalleryCard from '../components/GalleryCard.vue'
import { ref, computed } from 'vue'

// Gallery data with images from different directories
const galleryItems = ref([
  // Jadalnia images
  {
    imageSrc: '/img/jadalnia/untitled-1.JPG',
    title: 'Jadalnia',
    description: 'Przestronna jadalnia',
    category: 'jadalnia'
  },
  {
    imageSrc: '/img/jadalnia/untitled-2.JPG',
    title: 'Jadalnia - widok 2',
    description: 'Eleganckie wnętrze jadalni',
    category: 'jadalnia'
  },
  // Śniadania images
  {
    imageSrc: '/img/śnidadania/untitled-1.JPG',
    title: 'Śniadania',
    description: 'Urokliwe miejsce na poranny posiłek',
    category: 'śniadania'
  },
  {
    imageSrc: '/img/śnidadania/untitled-2.JPG',
    title: 'Śniadania - widok 2',
    description: 'Przytulna atmosfera śniadań',
    category: 'śniadania'
  },
  {
    imageSrc: '/img/śnidadania/untitled-3.JPG',
    title: 'Śniadania - widok 3',
    description: 'Komfortowe miejsce do spożywania posiłków',
    category: 'śniadania'
  },
  {
    imageSrc: '/img/śnidadania/untitled-4.JPG',
    title: 'Śniadania - widok 4',
    description: 'Stylowe wnętrze sali śniadaniowej',
    category: 'śniadania'
  },
  // Bawialnia images
  {
    imageSrc: '/img/bawialnia/untitled-1.JPG',
    title: 'Bawialnia',
    description: 'Miejsce relaksu i rozrywki dla dzieci',
    category: 'bawialnia'
  },

  // Room images from Rooms.vue
  {
    imageSrc: '/img/1-osobowe/untitled-1.JPG',
    title: 'Pokój Jednosobowy',
    description: 'Komfortowy pokój dla jednej osoby z widokiem na ogród',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/2-osobowe/untitled-7.JPG',
    title: 'Pokój Dwuosobowy',
    description: 'Przytulny pokój dla dwóch osób z balkonem i podwójnym łóżkiem',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/2-osobowy-economy/untitled-2.JPG',
    title: 'Pokój Dwuosobowy Economy',
    description: 'Funkcjonalny pokój z podstawowym wyposażeniem',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/3-osobowy/untitled-6.JPG',
    title: 'Pokój Trzyosobowy',
    description: 'Przestronny pokój dla trzech osób z balkonem',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/3-osobowy-standard/untitled-1.JPG',
    title: 'Pokój Trzyosobowy Standard',
    description: 'Wygodny pokój z większą przestrzenią i lepszym standardem',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/3-osobowe-widok/untitled-4.JPG',
    title: 'Pokój Trzyosobowy z Widokiem na Morze',
    description: 'Ekskluzywny pokój z balkonem i pięknym widokiem na Bałtyk',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/4-osobowe/untitled-1.JPG',
    title: 'Pokój Czteroosobowy',
    description: 'Idealny dla rodzin – przestronny pokój z balkonem',
    category: 'pokoje'
  },
  {
    imageSrc: '/img/apartament/untitled-7.JPG',
    title: 'Apartament Dwupoziomowy',
    description: 'Luksusowy apartament z pięknym widokiem na morze',
    category: 'pokoje'
  }
])

const handleImageClick = (imageSrc) => {
  console.log('Image clicked:', imageSrc)
  // You can add modal functionality here later
}
</script>

<template>
  <div class="min-h-screen bg-yellow-50">
    <!-- Header -->
    <PageHeader
      title="Galeria"
      description="Zobacz nasze wnętrza i udogodnienia"
    />

    <!-- Gallery Content -->
    <div class="max-w-screen-2xl mx-auto px-4 py-10 sm:px-6 lg:px-8 animate-fade-up animate-delay-300">
      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Dynamic Gallery Items -->
        <GalleryCard
          v-for="item in galleryItems"
          :key="item.imageSrc"
          :image-src="item.imageSrc"
          :title="item.title"
          :description="item.description"
          @image-click="handleImageClick"
        />

        <!-- Static Hotel Rooms -->






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
</style>
