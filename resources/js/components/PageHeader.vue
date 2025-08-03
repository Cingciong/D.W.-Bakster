<script setup>
// Komponent nagłówka strony - reużywalny dla wszystkich stron oprócz głównej
defineProps({
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    default: ''
  },
  backgroundClass: {
    type: String,
    default: 'hero-bg'
  },
  titleColor: {
    type: String,
    default: 'text-teal'
  },
  minHeight: {
    type: String,
    default: 'min-h-[500px]'
  }
})
</script>

<template>
  <div :class="[backgroundClass, minHeight, 'flex flex-col justify-center items-center text-center relative']">
    <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-16 select-none">
      <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl opacity-0 animate-fade-up animate-delay-200 animate-ease-out">
        <span v-html="title"></span>
      </h1>
      <p
        v-if="description"
        class="mt-4 text-2xl text-white max-w-3xl mx-auto bg-white/20 rounded-3xl px-6 py-3 opacity-0 animate-fade-up animate-delay-500 animate-ease-out"
      >
        {{ description }}
      </p>
    </div>

    <!-- Decorative separator -->
    <div class="absolute bottom-0 left-0 right-0">
      <hr class="border-0 h-10 bg-gradient-to-t from-yellow-50/100 to-white/0 " />

    </div>
  </div>
</template>

<style scoped>
/* Możesz dodać dodatkowe style tutaj jeśli potrzebne */
</style>
