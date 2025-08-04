<script setup>
import { ref, computed, onMounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import PageHeader from '../components/PageHeader.vue'

const route = useRoute()
const router = useRouter()


const roomTypes = {
  'jednosobowy': {
    title: 'Pokój <span class="text-teal">Jednosobowy</span>',
    description: 'Komfortowy pokój dla jednej osoby z widokiem na ogród. Idealny na spokojny wypoczynek nad morzem.',
    capacity: 1,
    size: '14 m²',
    bedType: 'Łóżko pojedyncze',
    features: [
      '1 osoba',
      '14 m²',
      'Łóżko pojedyncze',
      'Prywatna łazienka z prysznicem',
      'Wi-Fi',
      'Mini-lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków, suszarka',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/1-osobowe/untitled-1.JPG',
      '/img/1-osobowe/untitled-2.JPG',
      '/img/1-osobowe/untitled-3.JPG',
      '/img/1-osobowe/untitled-4.JPG',
      '/img/1-osobowe/untitled-5.JPG'
    ]
  },
  'dwuosobowy': {
    title: 'Pokój <span class="text-teal">Dwuosobowy</span>',
    description: 'Przytulny pokój dla dwóch osób z balkonem i podwójnym łóżkiem.',
    capacity: 2,
    size: '16–23 m²',
    bedType: 'Łóżko podwójne',
    features: [
      '2 osoby',
      '16–23 m²',
      'Łóżko podwójne',
      'Prywatna łazienka z prysznicem',
      'Wi-Fi',
      'Mini-lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków, suszarka',
      'Balkon ze stoliczkiem i krzesłami',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/2-osobowe/untitled-7.JPG',
      '/img/2-osobowe/untitled-2.JPG',
      '/img/2-osobowe/untitled-3.JPG',
      '/img/2-osobowe/untitled-4.JPG',
      '/img/2-osobowe/untitled-5.JPG',
      '/img/2-osobowe/untitled-6.JPG',
      '/img/2-osobowe/untitled.JPG',
      '/img/2-osobowe/untitled-8.JPG'
    ]
  },
  'dwuosobowy-economy': {
    title: 'Pokój <span class="text-teal">Dwuosobowy Economy</span>',
    description: 'Funkcjonalny pokój dla dwóch osób z podstawowym wyposażeniem i dostępem do wszystkich udogodnień.',
    capacity: 2,
    size: '16 m²',
    bedType: 'Łóżko podwójne',
    features: [
      '2 osoby',
      '16 m²',
      'Łóżko podwójne',
      'Prywatna łazienka z prysznicem',
      'Wi-Fi',
      'Mini-lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków, suszarka',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/2-osobowy-economy/untitled-2.JPG',
      '/img/2-osobowy-economy/untitled-6.JPG',
      '/img/2-osobowy-economy/untitled-3.JPG',
      '/img/2-osobowy-economy/untitled-4.JPG',
      '/img/2-osobowy-economy/untitled-5.JPG',
      '/img/2-osobowy-economy/untitled-1.JPG',
      '/img/2-osobowy-economy/untitled-7.JPG'
    ]
  },
  'trzyosobowy': {
    title: 'Pokój <span class="text-teal">Trzyosobowy</span>',
    description: 'Przestronny pokój dla trzech osób z balkonem i wygodnymi łóżkami.',
    capacity: 3,
    size: '29 m²',
    bedType: 'Łóżko podwójne + łóżko pojedyncze',
    features: [
      '3 osoby',
      '29 m²',
      'Łóżko podwójne + łóżko pojedyncze',
      'Prywatna łazienka z prysznicem',
      'Wi-Fi',
      'Mini-lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków, suszarka',
      'Balkon ze stoliczkiem i krzesłami',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/3-osobowy/untitled-6.JPG',
      '/img/3-osobowy/untitled-2.JPG',
      '/img/3-osobowy/untitled-3.JPG',
      '/img/3-osobowy/untitled-4.JPG',
      '/img/3-osobowy/untitled-1.JPG',
      '/img/3-osobowy/untitled-5.JPG',
      '/img/3-osobowy/untitled-7.JPG',
      '/img/3-osobowy/untitled-8.JPG'
    ]
  },
  'trzyosobowy-standard': {
    title: 'Pokój <span class="text-teal">Trzyosobowy Standard</span>',
    description: 'Wygodny pokój dla trzech osób z większą przestrzenią i lepszym standardem wyposażenia.',
    capacity: 3,
    size: 'ok. 32–35 m²',
    bedType: 'Łóżko podwójne + łóżko pojedyncze',
    features: [
      '3 osoby',
      'ok. 32–35 m²',
      'Łóżko podwójne + łóżko pojedyncze',
      'Prywatna łazienka z prysznicem',
      'Wi-Fi',
      'Mini-lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków, suszarka',
      'Balkon ze stoliczkiem i krzesłami',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/3-osobowy-standard/untitled-1.JPG',
      '/img/3-osobowy-standard/untitled-2.JPG',
      '/img/3-osobowy-standard/untitled-3.JPG',
      '/img/3-osobowy-standard/untitled-4.JPG'
    ]
  },
  'trzyosobowy-morze': {
    title: 'Pokój <span class="text-teal">Trzyosobowy z Widokiem na Morze</span>',
    description: 'Ekskluzywny pokój z balkonem i pięknym widokiem na Bałtyk.',
    capacity: 3,
    size: '35–40 m²',
    bedType: 'Łóżko podwójne + pojedyncze',
    features: [
      '3 osoby',
      '35–40 m²',
      'Łóżko podwójne + pojedyncze',
      'Prywatna łazienka z przysznicem',
      'Wi-Fi',
      'Mini-lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków, suszarka',
      'Balkon ze stoliczkiem i krzesłami',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/3-osobowe-widok/untitled-1.JPG',
      '/img/3-osobowe-widok/untitled-2.JPG',
      '/img/3-osobowe-widok/untitled-3.JPG',
      '/img/3-osobowe-widok/untitled-4.JPG',
      '/img/3-osobowe-widok/untitled-5.JPG'
    ]
  },
  'czteroosobowy': {
    title: 'Pokój <span class="text-teal">Czteroosobowy</span>',
    description: 'Idealny dla rodzin – przestronny pokój z balkonem i kompletnym wyposażeniem.',
    capacity: 4,
    size: '29–32 m²',
    bedType: 'Łóżko podwójne + dwa pojedyncze',
    features: [
      '4 osoby',
      '29–32 m²',
      'Łóżko podwójne + dwa pojedyncze',
      'Prywatna łazienka z prysznicem',
      'Wi-Fi',
      'Lodówka, czajnik',
      'Ręczniki',
      'Mały zestaw kosmetyków',
      'Balkon ze stoliczkiem i krzesłami',
      'Zestaw plażowy: koc, parawan, leżak',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/4-osobowe/untitled-1.JPG',
      '/img/4-osobowe/untitled-2.JPG',
      '/img/4-osobowe/untitled-3.JPG',
      '/img/4-osobowe/untitled-4.JPG',
      '/img/4-osobowe/untitled-5.JPG',
      '/img/4-osobowe/untitled-6.JPG',
      '/img/4-osobowe/untitled-7.JPG',
      '/img/4-osobowe/untitled-8.JPG'
    ]
  },
  'apartament-dwupoziomowy': {
    title: 'Apartament <span class="text-teal">Dwupoziomowy</span>',
    description: 'Luksusowy apartament z pięknym widokiem na morze – idealny na dłuższy pobyt lub rodzinne wakacje.',
    capacity: 6,
    size: 'ok. 60–80 m²',
    bedType: 'Łóżko podwójne + 2 pojedyncze',
    features: [
      '4–6 osób',
      'ok. 60–80 m²',
      '2 poziomy: sypialnia + salon z kuchnią',
      'Łóżko podwójne + 2 pojedyncze',
      'Aneks kuchenny, jadalnia, balkon',
      '2 łazienki (w tym jedna z narożną wanną)',
      'Wi-Fi',
      'Lodówka, czajnik, pełne wyposażenie',
      'Ręczniki',
      'Mały zestaw kosmetyków',
      'Widok na morze z balkonu i okien dachowych',
      'Bezpłatne miejsce parkingowe',
      'Śniadanie w cenie'
    ],
    images: [
      '/img/apartament/untitled-7.JPG',
      '/img/apartament/untitled-2.JPG',
      '/img/apartament/untitled-3.JPG',
      '/img/apartament/untitled-4.JPG',
      '/img/apartament/untitled-5.JPG',
      '/img/apartament/untitled-6.JPG',
      '/img/apartament/untitled-1.JPG',
      '/img/apartament/untitled-8.JPG',
      '/img/apartament/untitled-9.JPG',
      '/img/apartament/untitled-10.JPG'
    ]
  }
};



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
  <div v-if="currentRoom" class="min-h-screen bg-yellow-50">
    <!-- Hero Section -->
    <PageHeader
      :title="currentRoom.title"
      :description="currentRoom.description"
    />

    <!-- Breadcrumb Navigation -->

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
              <div class="relative h-96 rounded-lg bg-gray-100 shadow-xl  overflow-hidden">
                <img
                  :src="currentRoom.images[currentImageIndex]"
                  :alt="currentRoom.title"
                  class="w-auto h-full mx-auto bg-gray-300 object-cover transition-transform duration-300"

                />

                <!-- Navigation Arrows -->
                <button
                  @click="prevImage"
                  class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-gray-300/80  rounded-full p-2 transition-all duration-200"
                >
                  <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                  </svg>
                </button>
                <button
                  @click="nextImage"
                  class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80  hover:bg-gray-300/80 rounded-full p-2 transition-all duration-200"
                >
                  <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                </button>

                <!-- Image Counter -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-full text-lg">
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
                    class="w-full h-full object-cover img"
                  />
                </button>
              </div>
            </div>
          </div>

          <!-- Room Features -->
          <div class="mb-8">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Wyposażenie</h2>
            <div class="bg-white rounded-lg shadow-md p-8">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                  v-for="feature in currentRoom.features"
                  :key="feature"
                  class="flex items-center"
                >
                  <div class="w-3 h-3 bg-blue-500 rounded-full mr-4"></div>
                  <span class="text-gray-700 text-xl">{{ feature }}</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional Info -->
          <div class="bg-white rounded-lg shadow-md p-8">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Informacje Dodatkowe</h2>
            <div class="prose max-w-none text-gray-600">
              <p class="mb-6 text-xl">{{ currentRoom.description }}</p>
              <p class="text-xl">Ten pokój jest idealny dla {{ currentRoom.capacity }} {{ currentRoom.capacity === 1 ? 'osoby' : 'osób' }}
                 i oferuje powierzchnię {{ currentRoom.size }}.
                 {{ currentRoom.bedType }} zapewnia komfortowy sen,
                 a wszystkie niezbędne udogodnienia sprawią, że Twój pobyt będzie niezapomniany.</p>
            </div>
          </div>
        </div>

        <!-- Booking Sidebar -->
        <div class="lg:col-span-1">
          <div class="bg-white rounded-lg shadow-md p-8 sticky top-8">

            <!-- Quick Info -->
            <div class="space-y-4 mb-8">
              <div class="flex justify-between items-center py-3 border-b border-gray-100">
                <span class="text-gray-600 text-xl">Pojemność:</span>
                <span class="font-semibold text-xl">{{ currentRoom.capacity }} {{ currentRoom.capacity === 1 ? 'osoba' : 'osoby' }}</span>
              </div>
              <div class="flex justify-between items-center py-3 border-b border-gray-100">
                <span class="text-gray-600 text-xl">Powierzchnia:</span>
                <span class="font-semibold text-xl">{{ currentRoom.size }}</span>
              </div>
              <div class="flex justify-between items-center py-3 border-b border-gray-100">
                <span class="text-gray-600 text-xl">Łóżko:</span>
                <span class="font-semibold text-xl">{{ currentRoom.bedType }}</span>
              </div>
            </div>

            <!-- Booking Button -->
            <button
              @click="bookRoom"
              class="w-full py-4 px-8 text-white text-xl font-semibold rounded-lg transition-all bg-secondary-500 duration-300 cursor-pointer hover:bg-secondary-500/60 hover:shadow-lg hover:transform hover:scale-105"

            >
              Skontaktuj się
            </button>

            <!-- Contact Info -->
            <div class="mt-8 pt-8 border-t border-gray-200 text-center">
              <p class="text-lg text-gray-600 mb-3">Potrzebujesz pomocy?</p>
              <div class="text-lg">
                <a href="tel:+48586752404" class="text-blue-600 hover:text-blue-800 block mb-2">tel./fax: 058 675 24 04</a>
                <a href="tel:+48733915030" class="text-blue-600 hover:text-blue-800 block mb-2">tel. kom: +48 733 915 030</a>
                <a href="mailto:bakster@bakster.pl" class="text-blue-600 hover:text-blue-800 block">bakster@bakster.pl</a>
              </div>
            </div>
          </div>

          <!-- Navigation -->
          <div class="mt-8">
            <router-link
              to="/pokoje"
              class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200 text-lg"
            >
              <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
  margin-bottom: 1.5rem;
  line-height: 1.7;
  font-size: 1.25rem;
}

:deep(.hero-bg) {
  background-image: url('/img/main.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

.img{
    overflow-clip-margin: unset;
}
</style>
