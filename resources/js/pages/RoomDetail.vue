<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import { useI18n } from 'vue-i18n'

const route = useRoute()
const router = useRouter()
const { t } = useI18n()


const roomTypes = {
  'jednosobowy': {
    title: 'Pokój Jednosobowy',
    englishTitle: 'Single Room',
    description: 'Komfortowy pokój dla jednej osoby z widokiem na ogród. Idealny na spokojny wypoczynek nad morzem.',
    englishDescription: 'Comfortable room for one person with garden view. Perfect for peaceful seaside relaxation.',
    price: '100-180',
    capacity: 1,
    size: '14 m²',
    bedType: 'Łóżko pojedyncze',
    features: [
      '1 osoba',
      '14 m²',
      'Łóżko pojedyncze',
      'Prywatna łazienka z prysznicem',
      'Bezpłatne Wi-Fi',
      'TV z kanałami naziemnymi i satelitarnymi',
      'Mini-lodówka, czajnik, zestaw kawowy',
      'Zestaw plażowy: koc, parawan, leżak'
    ],
    englishFeatures: [
      '1 person',
      '14 m²',
      'Single bed',
      'Private bathroom with shower',
      'Free Wi-Fi',
      'TV with terrestrial and satellite channels',
      'Mini-fridge, kettle, coffee set',
      'Beach set: blanket, windbreak, lounger'
    ],
    images: [
      'https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&h=600&fit=crop'
    ],
    color: '#3b82f6'
  },
  'dwuosobowy': {
    title: 'Pokój Dwuosobowy',
    englishTitle: 'Double Room',
    description: 'Przytulny pokój dla dwóch osób z balkonem i podwójnym łóżkiem.',
    englishDescription: 'Cozy room for two people with balcony and double bed.',
    price: '200-320',
    capacity: 2,
    size: '16-23 m²',
    bedType: 'Łóżko podwójne',
    features: [
      '2 osoby',
      '16-23 m²',
      'Łóżko podwójne',
      'Prywatna łazienka (część z oknem)',
      'Balkon lub okno balkonowe',
      'Bezpłatne Wi-Fi',
      'TV z płaskim ekranem',
      'Mini-lodówka, czajnik, zestaw kawowy',
      'Zestaw plażowy: koc, parawan, leżak'
    ],
    englishFeatures: [
      '2 people',
      '16-23 m²',
      'Double bed',
      'Private bathroom (some with window)',
      'Balcony or balcony window',
      'Free Wi-Fi',
      'Flat screen TV',
      'Mini-fridge, kettle, coffee set',
      'Beach set: blanket, windbreak, lounger'
    ],
    images: [
      'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop'
    ],
    color: '#10b981'
  },
  'dwuosobowy-economy': {
    title: 'Pokój Dwuosobowy Economy',
    englishTitle: 'Double Room Economy',
    description: 'Funkcjonalny pokój dla dwóch osób z podstawowym wyposażeniem i dostępem do wszystkich udogodnień.',
    englishDescription: 'Functional room for two people with basic equipment and access to all amenities.',
    price: '150-220',
    capacity: 2,
    size: '16 m²',
    bedType: 'Łóżko podwójne',
    features: [
      '2 osoby',
      '16 m²',
      'Łóżko podwójne',
      'Prywatna łazienka z prysznicem',
      'Bezpłatne Wi-Fi',
      'TV',
      'Mini-lodówka, czajnik',
      'Zestaw kawowy i plażowy'
    ],
    englishFeatures: [
      '2 people',
      '16 m²',
      'Double bed',
      'Private bathroom with shower',
      'Free Wi-Fi',
      'TV',
      'Mini-fridge, kettle',
      'Coffee and beach set'
    ],
    images: [
      'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1611892440504-42a792e24d32?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&h=600&fit=crop'
    ],
    color: '#6366f1'
  },
  'trzyosobowy': {
    title: 'Pokój Trzyosobowy',
    englishTitle: 'Triple Room',
    description: 'Przestronny pokój dla trzech osób z balkonem i wygodnymi łóżkami.',
    englishDescription: 'Spacious room for three people with balcony and comfortable beds.',
    price: '280-400',
    capacity: 3,
    size: '29 m²',
    bedType: 'Łóżko podwójne + łóżko pojedyncze',
    features: [
      '3 osoby',
      '29 m²',
      'Łóżko podwójne + łóżko pojedyncze',
      'Prywatna łazienka (część z oknem)',
      'Balkon',
      'TV z kanałami satelitarnymi',
      'Mini-lodówka, czajnik, zestaw kawowy',
      'Zestaw plażowy: koc, parawan, leżak'
    ],
    englishFeatures: [
      '3 people',
      '29 m²',
      'Double bed + single bed',
      'Private bathroom (some with window)',
      'Balcony',
      'TV with satellite channels',
      'Mini-fridge, kettle, coffee set',
      'Beach set: blanket, windbreak, lounger'
    ],
    images: [
      'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&h=600&fit=crop'
    ],
    color: '#059669'
  },
  'trzyosobowy-standard': {
    title: 'Pokój Trzyosobowy Standard',
    englishTitle: 'Triple Room Standard',
    description: 'Wygodny pokój dla trzech osób z większą przestrzenią i lepszym standardem wyposażenia.',
    englishDescription: 'Comfortable room for three people with more space and better standard equipment.',
    price: '320-450',
    capacity: 3,
    size: '32-35 m²',
    bedType: 'Łóżko podwójne + sofa rozkładana',
    features: [
      '3 osoby',
      'ok. 32-35 m²',
      'Łóżko podwójne + sofa rozkładana',
      'Prywatna łazienka z wanną',
      'Balkon z meblami wypoczynkowymi',
      'Minibar, Smart TV',
      'Sejf'
    ],
    englishFeatures: [
      '3 people',
      'approx. 32-35 m²',
      'Double bed + sofa bed',
      'Private bathroom with bathtub',
      'Balcony with lounge furniture',
      'Minibar, Smart TV',
      'Safe'
    ],
    images: [
      'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&h=600&fit=crop'
    ],
    color: '#7c3aed'
  },
  'trzyosobowy-morze': {
    title: 'Pokój Trzyosobowy z Widokiem na Morze',
    englishTitle: 'Triple Room with Sea View',
    description: 'Ekskluzywny pokój z balkonem i pięknym widokiem na Bałtyk.',
    englishDescription: 'Exclusive room with balcony and beautiful view of the Baltic Sea.',
    price: '400-580',
    capacity: 3,
    size: '35-40 m²',
    bedType: 'Łóżko podwójne + pojedyncze',
    features: [
      '3 osoby',
      '35-40 m²',
      'Łóżko podwójne + pojedyncze',
      'Prywatna łazienka z wanną',
      'Duży balkon z widokiem na morze',
      'Minibar premium',
      'Smart TV 55"',
      'Ekspres do kawy, sejf'
    ],
    englishFeatures: [
      '3 people',
      '35-40 m²',
      'Double bed + single bed',
      'Private bathroom with bathtub',
      'Large balcony with sea view',
      'Premium minibar',
      'Smart TV 55"',
      'Coffee machine, safe'
    ],
    images: [
      'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=800&h=600&fit=crop'
    ],
    color: '#0891b2'
  },
  'czteroosobowy': {
    title: 'Pokój Czteroosobowy',
    englishTitle: 'Quadruple Room',
    description: 'Idealny dla rodzin – przestronny pokój z balkonem i kompletnym wyposażeniem.',
    englishDescription: 'Perfect for families – spacious room with balcony and complete equipment.',
    price: '350-500',
    capacity: 4,
    size: '29-32 m²',
    bedType: 'Łóżko podwójne + dwa pojedyncze',
    features: [
      '4 osoby',
      '29-32 m²',
      'Łóżko podwójne + dwa pojedyncze',
      'Prywatna łazienka (część z oknem)',
      '1 lub 2 balkony',
      'TV, lodówka, czajnik, zestaw kawowy',
      'Zestaw plażowy i kącik dziecięcy'
    ],
    englishFeatures: [
      '4 people',
      '29-32 m²',
      'Double bed + two single beds',
      'Private bathroom (some with window)',
      '1 or 2 balconies',
      'TV, fridge, kettle, coffee set',
      'Beach set and children\'s corner'
    ],
    images: [
      'https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800&h=600&fit=crop'
    ],
    color: '#f97316'
  },
  'apartament-dwupoziomowy': {
    title: 'Apartament Dwupoziomowy',
    englishTitle: 'Two-Level Apartment',
    description: 'Luksusowy apartament z pięknym widokiem na morze – idealny na dłuższy pobyt lub rodzinne wakacje.',
    englishDescription: 'Luxury apartment with beautiful sea view – perfect for longer stays or family holidays.',
    price: '500-750',
    capacity: 6,
    size: '60-80 m²',
    bedType: 'Łóżko podwójne + 2 pojedyncze',
    features: [
      '4-6 osób',
      'ok. 60-80 m²',
      '2 poziomy: sypialnia + salon z kuchnią',
      'Łóżko podwójne + 2 pojedyncze',
      'Aneks kuchenny, jadalnia, balkon',
      '2 łazienki (w tym jedna z narożną wanną)',
      'Widok na morze z balkonu i okien dachowych',
      'TV, lodówka, czajnik, pełne wyposażenie'
    ],
    englishFeatures: [
      '4-6 people',
      'approx. 60-80 m²',
      '2 levels: bedroom + living room with kitchen',
      'Double bed + 2 single beds',
      'Kitchenette, dining room, balcony',
      '2 bathrooms (one with corner bathtub)',
      'Sea view from balcony and skylights',
      'TV, fridge, kettle, full equipment'
    ],
    images: [
      'https://images.unsplash.com/photo-1590490360182-c33d57733427?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=800&h=600&fit=crop',
      'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=800&h=600&fit=crop'
    ],
    color: '#dc2626'
  }
}

// Get current room data
const currentRoom = computed(() => {
  const slug = route.params.slug
  return roomTypes[slug] || null
})

// Current image index for gallery
const currentImageIndex = ref(0)

// Check if room exists
onMounted(() => {
  if (!currentRoom.value) {
    router.push('/404')
  }
})

// Gallery navigation
const nextImage = () => {
  if (currentRoom.value) {
    currentImageIndex.value = (currentImageIndex.value + 1) % currentRoom.value.images.length
  }
}

const prevImage = () => {
  if (currentRoom.value) {
    currentImageIndex.value = currentImageIndex.value === 0 
      ? currentRoom.value.images.length - 1 
      : currentImageIndex.value - 1
  }
}

const setCurrentImage = (index) => {
  currentImageIndex.value = index
}

// Book room function
const bookRoom = () => {
  // Redirect to contact page or booking system
  router.push('/kontakt')
}
</script>

<template>
  <div v-if="currentRoom" class="min-h-screen bg-gray-50">
    <!-- Hero Section -->
    <div class="hero-bg min-h-[400px] flex flex-col justify-center items-center text-center relative">
      <div class="absolute inset-0 bg-black bg-opacity-40"></div>
      <div class="relative z-10 max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl mb-4">{{ currentRoom.title }}</h1>
        <p class="text-xl text-white max-w-3xl mx-auto bg-white/30 rounded-3xl px-6 py-3">{{ currentRoom.description }}</p>
      </div>
    </div>

    <!-- Breadcrumb Navigation -->
    <div class="bg-white shadow-sm">
      <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
        <nav class="flex" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <router-link 
                to="/" 
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors"
              >
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                {{ $t('breadcrumb.home') }}
              </router-link>
            </li>
            <li>
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <router-link 
                  to="/pokoje" 
                  class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 transition-colors"
                >
                  {{ $t('breadcrumb.rooms') }}
                </router-link>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ currentRoom.title }}</span>
              </div>
            </li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        <!-- Room Details -->
        <div class="lg:col-span-2">
          <!-- Image Gallery -->
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Galeria</h2>
            <div class="relative">
              <!-- Main Image -->
              <div class="relative h-96 rounded-lg overflow-hidden">
                <img 
                  :src="currentRoom.images[currentImageIndex]" 
                  :alt="currentRoom.title"
                  class="w-full h-full object-cover"
                />
                
                <!-- Navigation Arrows -->
                <button 
                  @click="prevImage"
                  class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full p-2 transition-all duration-200"
                >
                  <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                  </svg>
                </button>
                <button 
                  @click="nextImage"
                  class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 rounded-full p-2 transition-all duration-200"
                >
                  <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </button>

                <!-- Image Counter -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-3 py-1 rounded-full text-sm">
                  {{ currentImageIndex + 1 }} / {{ currentRoom.images.length }}
                </div>
              </div>

              <!-- Thumbnails -->
              <div class="grid grid-cols-3 gap-2 mt-4">
                <button 
                  v-for="(image, index) in currentRoom.images" 
                  :key="index"
                  @click="setCurrentImage(index)"
                  class="relative h-24 rounded-lg overflow-hidden transition-all duration-200"
                  :class="currentImageIndex === index ? 'ring-4 ring-blue-500' : 'hover:opacity-75'"
                >
                  <img 
                    :src="image" 
                    :alt="`${currentRoom.title} - zdjęcie ${index + 1}`"
                    class="w-full h-full object-cover"
                  />
                </button>
              </div>
            </div>
          </div>

          <!-- Room Features -->
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Wyposażenie</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div 
                  v-for="feature in currentRoom.features" 
                  :key="feature"
                  class="flex items-center"
                >
                  <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                  <span class="text-gray-700">{{ feature }}</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Info -->
          <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Informacje Dodatkowe</h2>
            <div class="prose max-w-none text-gray-600">
              <p class="mb-4">{{ currentRoom.description }}</p>
              <p>Ten pokój jest idealny dla {{ currentRoom.capacity }} {{ currentRoom.capacity === 1 ? 'osoby' : 'osób' }} 
                 i oferuje powierzchnię {{ currentRoom.size }}. 
                 {{ currentRoom.bedType }} zapewnia komfortowy sen, 
                 a wszystkie niezbędne udogodnienia sprawią, że Twój pobyt będzie niezapomniany.</p>
            </div>
          </div>
        </div>

        <!-- Booking Sidebar -->
        <div class="lg:col-span-1">
          <div class="bg-white rounded-lg shadow-md p-6 sticky top-8">
            <!-- Price -->
            <div class="text-center mb-6">
              <div class="text-3xl font-bold" :style="`color: ${currentRoom.color}`">
                {{ currentRoom.price }} zł
              </div>
              <div class="text-gray-500">za noc</div>
            </div>

            <!-- Quick Info -->
            <div class="space-y-3 mb-6">
              <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="text-gray-600">Pojemność:</span>
                <span class="font-semibold">{{ currentRoom.capacity }} {{ currentRoom.capacity === 1 ? 'osoba' : 'osoby' }}</span>
              </div>
              <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="text-gray-600">Powierzchnia:</span>
                <span class="font-semibold">{{ currentRoom.size }}</span>
              </div>
              <div class="flex justify-between items-center py-2 border-b border-gray-100">
                <span class="text-gray-600">Łóżko:</span>
                <span class="font-semibold">{{ currentRoom.bedType }}</span>
              </div>
            </div>

            <!-- Booking Button -->
            <button 
              @click="bookRoom"
              class="w-full py-3 px-6 text-white font-semibold rounded-lg transition-all duration-300 hover:shadow-lg hover:transform hover:scale-105"
              :style="`background-color: ${currentRoom.color}`"
            >
              Zarezerwuj Pokój
            </button>

            <!-- Contact Info -->
            <div class="mt-6 pt-6 border-t border-gray-200 text-center">
              <p class="text-sm text-gray-600 mb-2">Potrzebujesz pomocy?</p>
              <div class="text-sm">
                <a href="tel:+48123456789" class="text-blue-600 hover:text-blue-800 block">+48 123 456 789</a>
                <a href="mailto:info@bakster.pl" class="text-blue-600 hover:text-blue-800 block">info@bakster.pl</a>
              </div>
            </div>
          </div>

          <!-- Navigation -->
          <div class="mt-6">
            <router-link 
              to="/pokoje" 
              class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200"
            >
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
              </svg>
              Powrót do wszystkich pokoi
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
/* Custom styles for better visual appeal */
.prose p {
  margin-bottom: 1rem;
  line-height: 1.6;
}

.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
