<template>

        <div class="text-center min-h-screen hero-bg gap-5 select-none">
            <h1 class="text-xl font-bold text-dark sm:text-5xl lg:text-7xl opacity-0 animate-fade-up animate-delay-200 animate-ease-out">
                Witamy w Pensjonacie <span class="text-teal opacity-0 animate-fade-up animate-ease-out animate-duration-400 animate-delay-500">Bakster</span>
            </h1>
            <p class="text-2xl text-white max-w-3xl mx-auto p-4 bg-gray-700/20 rounded-3xl opacity-0 animate-fade-up animate-delay-700 animate-ease-out">
               Odkryj komfort i wygodę naszego przytulnego pensjonatu nad Bałtykiem we Władysławowie
            </p>
            <router-link
                to="/pokoje"
                class="inline-flex text-xl items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-500 hover:bg-primary-600 opacity-0 animate-fade-up animate-delay-[900ms] animate-ease-out hover:scale-105 transform transition-all duration-300"
            >
                Zobacz Pokoje
            </router-link>
        </div>
            <div class="absolute bottom-0 left-0 right-0">
      <hr class="border-0 h-8 bg-gradient-to-t from-yellow-50/100 to-white/0 " />

    </div>

</template>

<script setup>
// Strona główna - Home page
</script>

<style scoped>
.hero-bg {
  background-image: url('/img/main.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 2rem;
}
</style>
