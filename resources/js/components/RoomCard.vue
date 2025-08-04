<script setup>
import { useRouter } from 'vue-router'
import { computed } from 'vue'

// Define props for the room card component - now accepting CMS data
const props = defineProps({
  // CMS room data
  roomData: {
    type: Object,
    required: true
  },
  // Optional color override
  color: {
    type: String,
    default: '#3b82f6'
  }
})

const router = useRouter()

// Computed properties from room data
const title = computed(() => props.roomData.name || '')
const description = computed(() => props.roomData.short_description || props.roomData.description || '')
const imgLink = computed(() => props.roomData.main_image_url || '/img/default-room.jpg')
const amenitiesHtml = computed(() => props.roomData.amenities_html || '')
const roomSlug = computed(() => props.roomData.slug || '')

const handleBooking = () => {
  if (roomSlug.value) {
    // Navigate to room detail page
    router.push(`/pokoj/${roomSlug.value}`)
  }
}
</script>

<template>
  <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col lg:flex-row h-full">
    <!-- Room Image Section -->
    <div class="lg:w-1/2 h-64 lg:h-auto overflow-hidden">
      <img
        :src="imgLink"
        :alt="title"
        @click="handleBooking"
        class="w-full object-cover roomimg cursor-pointer h-full transition-transform duration-300 transform hover:scale-105"
      />
    </div>

    <!-- Room Details -->
    <div class="lg:w-1/2 p-12 flex flex-col flex-grow">
      <h3 class="text-5xl font-bold text-gray-900 mb-6">{{ title }}</h3>
      <p class="text-2xl text-gray-600 mb-8 leading-relaxed">{{ description }}</p>

      <!-- Amenities from CMS -->
      <div 
        v-if="amenitiesHtml" 
        class="text-xl text-gray-700 space-y-3 mb-8 flex-grow"
        v-html="amenitiesHtml"
      ></div>
      
      <!-- Fallback for slot content (legacy support) -->
      <ul v-else class="text-xl text-gray-700 space-y-3 mb-8 flex-grow">
        <slot></slot>
      </ul>

      <!-- Book Button -->
      <div class="flex justify-end items-center mt-auto">
        <button
          @click="handleBooking"
          class="px-8 py-4 text-xl text-white rounded-lg transition-all duration-300 bg-teal-500 hover:bg-teal-600 cursor-pointer font-semibold hover:shadow-lg hover:transform hover:scale-105"
        >
          Zobacz Pokój
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
.roomimg {
    overflow-clip-margin: unset;
}
</style>
