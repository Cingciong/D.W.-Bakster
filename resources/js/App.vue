<script setup>
// Main App component
import Navbar from './components/Navbar.vue'
import Footer from './components/Footer.vue'
</script>

<template>
  <div class="app">
    <!-- Fixed Navbar Component -->
    <Navbar />

    <!-- Main Content with top padding for fixed navbar -->
    <main class="">
      <router-view />
    </main>

    <!-- Footer Component -->
    <Footer />
  </div>
</template>
