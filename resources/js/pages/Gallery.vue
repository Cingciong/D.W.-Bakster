<script setup>
import { ref, onMounted } from 'vue'
import { useGalleries } from '../composables/useGalleries.js'
import PageHeader from '../components/PageHeader.vue'
import GalleryCard from '../components/GalleryCard.vue'

// Use the galleries composable
const { galleries, loading, error, fetchGalleries } = useGalleries()

// Load galleries on component mount
onMounted(async () => {
  await fetchGalleries()
})

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

    <!-- Loading state -->
    <div v-if="loading" class="flex justify-center items-center py-20">s
      <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-teal-600"></div>
      <span class="ml-4 text-xl text-gray-600">Ładowanie galerii...</span>
    </div>

    <!-- Error state -->
    <div v-else-if="error" class="min-h-screen flex items-center justify-center py-20">
      <div class="bg-red-50 border border-red-200 rounded-lg p-8 text-center max-w-md">
        <div class="text-red-600 text-xl mb-4">⚠️ Wystąpił błąd</div>
        <p class="text-red-700 mb-4">{{ error }}</p>
        <button
          @click="fetchGalleries()"
          class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors"
        >
          Spróbuj ponownie
        </button>
      </div>
    </div>

    <!-- Gallery Content -->
    <div v-else class="max-w-screen-2xl mx-auto px-4 py-20 sm:px-6 lg:px-8 animate-fade-up animate-delay-300">
      <!-- Gallery Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Dynamic Gallery Items from CMS -->
        <GalleryCard
          v-for="gallery in galleries"
          :key="gallery.id"
          :image-src="gallery.main_image_url"
          :title="gallery.title"
          :description="gallery.description"
          @image-click="handleImageClick"
        />
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

