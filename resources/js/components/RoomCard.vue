<script setup>
import { useRouter } from 'vue-router'
import { onMounted } from 'vue'

// Define simplified props for the room card component
const props = defineProps({
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  imgLink: {
    type: String,
    required: true
  },
  color: {
    type: String,
    default: 'blue'
  },
  link: {
    type: String,
    default: '/booking'
  },
  roomSlug: {
    type: String,
    required: false
  }
})

const router = useRouter()

const handleBooking = () => {
  if (props.roomSlug) {
    // Navigate to room detail page
    router.push(`/pokoj/${props.roomSlug}`)
  } else {
    // Fallback to emit event
    emit('book-room', {
      title: props.title,
      price: props.price,
      link: props.link
    })
  }
}
</script>

<template>
  <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
    <!-- Room Image Section -->
    <div class="h-48 overflow-hidden">
      <img
        :src="imgLink"
        :alt="title"
        class=" w-full object-cover roomimg cursor-pointer h-full transition-transform duration-300 transform hover:scale-105"
      />
    </div>

    <!-- Room Details -->
    <div class="p-6 flex flex-col flex-grow">
      <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ title }}</h3>
      <p class="text-gray-600 mb-4">{{ description }}</p>

      <!-- Custom HTML Content Slot -->
      <ul class="text-sm text-gray-500 space-y-1 mb-4 flex-grow">
        <slot></slot>
      </ul>

      <!-- Book Button -->
      <div class="flex justify-end items-center mt-auto">
        <button
          @click="handleBooking"
          class="px-4 py-2  text-white rounded transition-all duration-300 bg-teal-600 hover:bg-teal-700 cursor-pointer font-semibold hover:shadow-lg hover:transform hover:scale-105"
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
