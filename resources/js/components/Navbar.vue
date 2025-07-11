<script setup>
import { ref } from 'vue'
import LanguageSwitcher from './LanguageSwitcher.vue'

const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}
</script>

<template>
  <nav class="fixed top-0 left-0 right-0 bg-white/10 backdrop-blur-md shadow-lg z-50 select-none ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">

        <div class="flex items-center">
            <a href="/" class="text-2xl font-bold flex flex-row gap-3 py-auto  text-teal">
                <img :src="'/img/logo.svg'" alt="D.W. Bakster Logo" class="h-8 w-8  hover:opacity-55 duration-300">
                <span class="text-2xl font-bold hover:text-teal/55 duration-300 text-teal my-auto ">Pensjonat Bakster</span>
            </a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center space-x-8">
          <router-link
            to="/"
            class="text-gray-700 hover:text-primary-500 px-3 py-2 rounded-md text-sm font-medium transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Home' }"
          >
            {{ $t('nav.home') }}
          </router-link>

          <router-link
            to="/pokoje"
            class="text-gray-700 hover:text-primary-500 px-3 py-2 rounded-md text-sm font-medium transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Rooms' }"
          >
            {{ $t('nav.rooms') }}
          </router-link>

          <router-link
            to="/galeria"
            class="text-gray-700 hover:text-primary-500 px-3 py-2 rounded-md text-sm font-medium transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Gallery' }"
          >
            {{ $t('nav.gallery') }}
          </router-link>

          <router-link
            to="/o-nas"
            class="text-gray-700 hover:text-primary-500 px-3 py-2 rounded-md text-sm font-medium transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'About' }"
          >
            {{ $t('nav.about') }}
          </router-link>

          <router-link
            to="/kontakt"
            class="text-gray-700 hover:text-primary-500 px-3 py-2 rounded-md text-sm font-medium transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Contact' }"
          >
            {{ $t('nav.contact') }}
          </router-link>

          <router-link
            to="/regulamin"
            class="text-gray-700 hover:text-primary-500 px-3 py-2 rounded-md text-sm font-medium transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Regulamin' }"
          >
            {{ $t('nav.terms') }}
          </router-link>

          <!-- Language Switcher -->
          <LanguageSwitcher variant="navbar" />
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden flex items-center">
          <button
            @click="toggleMenu"
            class="text-gray-700 hover:text-primary-500 focus:outline-none focus:text-primary-500"
          >
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path v-if="!isMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Navigation Menu -->
      <div v-if="isMenuOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-white shadow-lg">
          <router-link
            to="/"
            @click="isMenuOpen = false"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-primary-50 transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Home' }"
          >
            {{ $t('nav.home') }}
          </router-link>

          <router-link
            to="/pokoje"
            @click="isMenuOpen = false"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-primary-50 transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Rooms' }"
          >
            {{ $t('nav.rooms') }}
          </router-link>

          <router-link
            to="/galeria"
            @click="isMenuOpen = false"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-primary-50 transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Gallery' }"
          >
            {{ $t('nav.gallery') }}
          </router-link>

          <router-link
            to="/o-nas"
            @click="isMenuOpen = false"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-primary-50 transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'About' }"
          >
            {{ $t('nav.about') }}
          </router-link>

          <router-link
            to="/kontakt"
            @click="isMenuOpen = false"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-primary-50 transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Contact' }"
          >
            {{ $t('nav.contact') }}
          </router-link>

          <router-link
            to="/regulamin"
            @click="isMenuOpen = false"
            class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-primary-500 hover:bg-primary-50 transition-colors"
            :class="{ 'text-primary-500 bg-primary-50': $route.name === 'Regulamin' }"
          >
            {{ $t('nav.terms') }}
          </router-link>

          <!-- Mobile Language Switcher -->
          <div class="px-3 py-2">
            <LanguageSwitcher variant="navbar" />
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>

<style scoped>
.router-link-active {
  color: #007481 !important;
  background-color: #f0f9ff !important;
}

.logo-teal {
  filter: brightness(0) saturate(100%) invert(33%) sepia(73%) saturate(1040%) hue-rotate(164deg) brightness(94%) contrast(101%);
}

.logo-teal:hover {
  filter: brightness(0) saturate(100%) invert(25%) sepia(100%) saturate(1500%) hue-rotate(170deg) brightness(90%) contrast(105%);
}
</style>
