<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { useRooms } from '../composables/useRooms.js'
import PageHeader from '../components/PageHeader.vue'

const route = useRoute()
const router = useRouter()

// Use the rooms composable
const { room, loading, error, fetchRoom } = useRooms()

// Load room data on component mount
onMounted(async () => {
  const slug = route.params.slug
  if (slug) {
    await fetchRoom(slug)
  }
})

// Computed properties for the room
const roomTitle = computed(() => {
  if (!room.value) return ''
  return `${room.value.name} <span class="text-teal"></span>`
})

const roomDescription = computed(() => room.value?.description || room.value?.short_description || '')
const roomImages = computed(() => room.value?.all_images_urls || [])
const mainImage = computed(() => room.value?.main_image_url || '')
const amenitiesHtml = computed(() => room.value?.amenities_html || '')

// Gallery and booking logic
const selectedImageIndex = ref(0)
const showGallery = ref(false)

const selectImage = (index) => {
  selectedImageIndex.value = index
}

const previousImage = () => {
  if (roomImages.value.length > 0) {
    selectedImageIndex.value = selectedImageIndex.value > 0 
      ? selectedImageIndex.value - 1 
      : roomImages.value.length - 1
  }
}

const nextImage = () => {
  if (roomImages.value.length > 0) {
    selectedImageIndex.value = selectedImageIndex.value < roomImages.value.length - 1 
      ? selectedImageIndex.value + 1 
      : 0
  }
}

const handleBooking = () => {
  router.push({
    path: '/kontakt',
    query: { room: room.value?.name }
  })
}
</script>

<template>
  <div class="min-h-screen bg-yellow-50">
    
    <!-- Loading state -->
    <div v-if="loading" class="flex justify-center items-center py-20">
      <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-teal-600"></div>
      <span class="ml-4 text-xl text-gray-600">Ładowanie pokoju...</span>
    </div>

    <!-- Error state -->
    <div v-else-if="error" class="min-h-screen flex items-center justify-center">
      <div class="bg-red-50 border border-red-200 rounded-lg p-8 text-center max-w-md">
        <div class="text-red-600 text-xl mb-4">⚠️ Wystąpił błąd</div>
        <p class="text-red-700 mb-4">{{ error }}</p>
        <button 
          @click="() => fetchRoom(route.params.slug)" 
          class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors mr-4"
        >
          Spróbuj ponownie
        </button>
        <button 
          @click="router.push('/pokoje')" 
          class="px-6 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors"
        >
          Powrót do pokojów
        </button>
      </div>
    </div>

    <!-- Room content -->
    <div v-else-if="room">
      <!-- Hero Section -->
      <PageHeader
        :title="roomTitle"
        :description="roomDescription"
      />

      <!-- Main Content -->
      <div class="max-w-screen-2xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

          <!-- Room Details -->
          <div class="lg:col-span-2">
            <!-- Image Gallery -->
            <div class="mb-8">
              <h2 class="text-4xl font-bold text-gray-900 mb-6">Galeria</h2>
              <div class="relative">
                <!-- Main Image -->
                <div v-if="roomImages.length > 0" class="relative h-96 rounded-lg bg-gray-100 shadow-xl overflow-hidden">
                  <img
                    :src="roomImages[selectedImageIndex]"
                    :alt="room.name"
                    class="w-full h-full object-cover"
                  />
                  
                  <!-- Navigation arrows -->
                  <button
                    v-if="roomImages.length > 1"
                    @click="previousImage"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 transition-all"
                  >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                  </button>
                  
                  <button
                    v-if="roomImages.length > 1"
                    @click="nextImage"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 rounded-full hover:bg-opacity-75 transition-all"
                  >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                  </button>

                  <!-- Image counter -->
                  <div v-if="roomImages.length > 1" class="absolute bottom-4 right-4 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                    {{ selectedImageIndex + 1 }} / {{ roomImages.length }}
                  </div>
                </div>

                <!-- Thumbnail Gallery -->
                <div v-if="roomImages.length > 1" class="grid grid-cols-4 sm:grid-cols-6 lg:grid-cols-8 gap-2 mt-4">
                  <div
                    v-for="(image, index) in roomImages"
                    :key="index"
                    @click="selectImage(index)"
                    class="relative h-20 rounded-lg overflow-hidden cursor-pointer border-2 transition-all duration-200"
                    :class="[
                      selectedImageIndex === index
                        ? 'border-teal-500 shadow-md'
                        : 'border-gray-200 hover:border-gray-300'
                    ]"
                  >
                    <img
                      :src="image"
                      :alt="`${room.name} - zdjęcie ${index + 1}`"
                      class="w-full h-full object-cover transition-transform duration-200 hover:scale-105"
                    />
                  </div>
                </div>
              </div>
            </div>

            <!-- Room Description -->
            <div class="mb-8">
              <h2 class="text-4xl font-bold text-gray-900 mb-6">Opis pokoju</h2>
              <div class="prose prose-lg max-w-none">
                <p class="text-xl text-gray-700 leading-relaxed">{{ roomDescription }}</p>
              </div>
            </div>

            <!-- Room Features -->
            <div v-if="amenitiesHtml" class="mb-8">
              <h2 class="text-4xl font-bold text-gray-900 mb-6">Udogodnienia</h2>
              <div class="bg-white rounded-lg p-8 shadow-md">
                <div 
                  class="amenities-content text-lg text-gray-700"
                  v-html="amenitiesHtml"
                ></div>
              </div>
            </div>
          </div>

          <!-- Booking Sidebar -->
          <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-lg p-8 sticky top-8">
              <h3 class="text-3xl font-bold text-gray-900 mb-6 text-center">Rezerwacja</h3>
              
              <div class="space-y-6">
                <div class="text-center">
                  <p class="text-gray-600 text-lg mb-4">Zainteresowany tym pokojem?</p>
                  <button
                    @click="handleBooking"
                    class="w-full bg-teal-600 text-white font-semibold py-4 px-6 rounded-lg hover:bg-teal-700 transition-colors duration-200 text-xl"
                  >
                    Skontaktuj się z nami
                  </button>
                </div>

                <div class="border-t pt-6">
                  <div class="text-center text-gray-600">
                    <p class="mb-2">📞 Telefon:</p>
                    <a href="tel:+48123456789" class="text-teal-600 hover:text-teal-700 font-semibold text-lg">
                      +48 123 456 789
                    </a>
                  </div>
                </div>

                <div class="border-t pt-6">
                  <div class="text-center text-gray-600">
                    <p class="mb-2">✉️ Email:</p>
                    <a href="mailto:rezerwacje@bakster.pl" class="text-teal-600 hover:text-teal-700 font-semibold">
                      rezerwacje@bakster.pl
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Back to rooms button -->
        <div class="mt-12 text-center">
          <button
            @click="router.push('/pokoje')"
            class="inline-flex items-center px-6 py-3 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors duration-200"
          >
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            Powrót do listy pokojów
          </button>
        </div>
      </div>
    </div>

    <!-- Not found state -->
    <div v-else class="min-h-screen flex items-center justify-center">
      <div class="text-center">
        <div class="text-6xl mb-4">🏨</div>
        <h1 class="text-3xl font-bold text-gray-900 mb-4">Pokój nie został znaleziony</h1>
        <p class="text-xl text-gray-600 mb-8">Przepraszamy, ale pokój o podanym adresie nie istnieje.</p>
        <button
          @click="router.push('/pokoje')"
          class="px-8 py-3 bg-teal-600 text-white rounded-lg hover:bg-teal-700 transition-colors duration-200"
        >
          Zobacz wszystkie pokoje
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Custom styles for amenities content */
:deep(.amenities-content ul) {
  list-style: none;
  margin: 0;
  padding: 0;
}

:deep(.amenities-content ul > li) {
  display: flex;
  align-items: flex-start;
  margin-bottom: 0.5rem;
}

:deep(.amenities-content li::before) {
  content: '✓';
  color: #0d9488;
  font-weight: bold;
  margin-right: 0.75rem;
  margin-top: 0.25rem;
  flex-shrink: 0;
}

:deep(.amenities-content p) {
  margin-bottom: 1rem;
}

:deep(.amenities-content h3) {
  font-size: 1.25rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #1f2937;
}
</style>
