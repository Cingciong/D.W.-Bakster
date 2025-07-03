<script setup>
import { useRouter } from 'vue-router'

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
  price: {
    type: String,
    required: true
  },
  currency: {
    type: String,
    default: '$'
  },
  period: {
    type: String,
    default: '/night'
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

// Emit event when button is clicked
const emit = defineEmits(['book-room'])

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
        class="w-full h-full object-cover"
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

      <!-- Price and Book Button -->
      <div class="flex justify-between items-center mt-auto">
        <span
          class="text-2xl font-bold"
          :style="color.startsWith('#') ? `color: ${color}` : ''"
          :class="!color.startsWith('#') ? `text-${color}-600` : ''"
        >
          {{ currency }}{{ price }}{{ period }}
        </span>
        <button
          @click="handleBooking"
          class="px-4 py-2 text-white rounded transition-all duration-300 hover:shadow-lg hover:transform hover:scale-105"
          :style="color.startsWith('#') ? `background-color: ${color}; filter: brightness(1);` : ''"
          :class="!color.startsWith('#') ? `bg-${color}-600 hover:bg-${color}-700` : ''"
          @mouseover="$event.target.style.filter = 'brightness(0.9)'"
          @mouseout="$event.target.style.filter = 'brightness(1)'"
        >
          Zobacz Pokój
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Add any custom styles if needed */
</style>
