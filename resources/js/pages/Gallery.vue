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
    description: 'Przestronna jadalnia z widokiem na ogród',
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
    title: 'Sala śniadaniowa',
    description: 'Urokliwe miejsce na poranny posiłek',
    category: 'śniadania'
  },
  {
    imageSrc: '/img/śnidadania/untitled-2.JPG',
    title: 'Sala śniadaniowa - widok 2',
    description: 'Przytulna atmosfera śniadań',
    category: 'śniadania'
  },
  {
    imageSrc: '/img/śnidadania/untitled-3.JPG',
    title: 'Sala śniadaniowa - widok 3',
    description: 'Komfortowe miejsce do spożywania posiłków',
    category: 'śniadania'
  },
  {
    imageSrc: '/img/śnidadania/untitled-4.JPG',
    title: 'Sala śniadaniowa - widok 4',
    description: 'Stylowe wnętrze sali śniadaniowej',
    category: 'śniadania'
  },
  // Bawialnia images
  {
    imageSrc: '/img/bawialnia/untitled-1.JPG',
    title: 'Bawialnia',
    description: 'Miejsce relaksu i rozrywki dla gości',
    category: 'bawialnia'
  }
])

const handleImageClick = (imageSrc) => {
  console.log('Image clicked:', imageSrc)
  // You can add modal functionality here later
}
</script>

<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <PageHeader
      title="Galeria"
      description="Zobacz nasze wnętrza i udogodnienia"
    />

    <!-- Gallery Content -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 animate-fade-up animate-delay-300">
      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Dynamic Gallery Items -->
        <GalleryCard
          v-for="(item, index) in galleryItems"
          :key="item.imageSrc"
          :image-src="item.imageSrc"
          :title="item.title"
          :description="item.description"
          :class="`animate-fade-up animate-delay-${(index + 1) * 100}`"
          @image-click="handleImageClick"
        />

        <!-- Static Hotel Rooms -->






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
</style>
