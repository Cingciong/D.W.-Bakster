<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="hero-bg min-h-[400px] flex flex-col justify-center items-center text-center">
      <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-white sm:text-5xl lg:text-6xl">Color <span class="text-teal">Testing</span></h1>
        <p class="mt-4 text-xl text-white max-w-3xl mx-auto bg-white/30 rounded-3xl px-6 py-3">Test wszystkich niestandardowych kolorów Tailwind</p>
      </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Primary Colors -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Primary Colors (#007481 theme)</h2>
        <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-10 gap-4">
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-50 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-50</p>
            <p class="text-xs text-gray-500">#f0f9ff</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-100 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-100</p>
            <p class="text-xs text-gray-500">#e0f2fe</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-200 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-200</p>
            <p class="text-xs text-gray-500">#bae6fd</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-300 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-300</p>
            <p class="text-xs text-gray-500">#7dd3fc</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-400 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-400</p>
            <p class="text-xs text-gray-500">#38bdf8</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-500 rounded-lg shadow mb-2 mx-auto border-4 border-gray-800"></div>
            <p class="text-xs font-medium font-bold">primary-500</p>
            <p class="text-xs text-gray-500">#007481</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-600 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-600</p>
            <p class="text-xs text-gray-500">#00435c</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-700 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-700</p>
            <p class="text-xs text-gray-500">#101828</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-800 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-800</p>
            <p class="text-xs text-gray-500">#0c1622</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-primary-900 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">primary-900</p>
            <p class="text-xs text-gray-500">#0a121b</p>
          </div>
        </div>
      </div>

      <!-- Secondary Colors -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Secondary Colors (#00a589 theme)</h2>
        <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-10 gap-4">
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-50 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-50</p>
            <p class="text-xs text-gray-500">#f0fdf4</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-100 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-100</p>
            <p class="text-xs text-gray-500">#dcfce7</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-200 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-200</p>
            <p class="text-xs text-gray-500">#bbf7d0</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-300 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-300</p>
            <p class="text-xs text-gray-500">#86efac</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-400 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-400</p>
            <p class="text-xs text-gray-500">#4ade80</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-500 rounded-lg shadow mb-2 mx-auto border-4 border-gray-800"></div>
            <p class="text-xs font-medium font-bold">secondary-500</p>
            <p class="text-xs text-gray-500">#00a589</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-600 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-600</p>
            <p class="text-xs text-gray-500">#16a34a</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-700 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-700</p>
            <p class="text-xs text-gray-500">#15803d</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-800 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-800</p>
            <p class="text-xs text-gray-500">#166534</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-secondary-900 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">secondary-900</p>
            <p class="text-xs text-gray-500">#14532d</p>
          </div>
        </div>
      </div>

      <!-- Accent Colors -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Accent Colors (#f9f871 theme)</h2>
        <div class="grid grid-cols-2 sm:grid-cols-5 lg:grid-cols-10 gap-4">
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-50 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-50</p>
            <p class="text-xs text-gray-500">#fefce8</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-100 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-100</p>
            <p class="text-xs text-gray-500">#fef9c3</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-200 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-200</p>
            <p class="text-xs text-gray-500">#fef08a</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-300 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-300</p>
            <p class="text-xs text-gray-500">#fde047</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-400 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-400</p>
            <p class="text-xs text-gray-500">#facc15</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-500 rounded-lg shadow mb-2 mx-auto border-4 border-gray-800"></div>
            <p class="text-xs font-medium font-bold">accent-500</p>
            <p class="text-xs text-gray-500">#f9f871</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-600 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-600</p>
            <p class="text-xs text-gray-500">#ca8a04</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-700 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-700</p>
            <p class="text-xs text-gray-500">#a16207</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-800 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-800</p>
            <p class="text-xs text-gray-500">#854d0e</p>
          </div>
          <div class="text-center">
            <div class="w-20 h-20 bg-accent-900 rounded-lg shadow mb-2 mx-auto"></div>
            <p class="text-xs font-medium">accent-900</p>
            <p class="text-xs text-gray-500">#713f12</p>
          </div>
        </div>
      </div>

      <!-- Special Colors -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Special Colors</h2>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
          <div class="text-center">
            <div class="w-32 h-32 bg-success rounded-lg shadow mb-4 mx-auto"></div>
            <p class="text-lg font-medium">success</p>
            <p class="text-sm text-gray-500">#82d47c</p>
          </div>
          <div class="text-center">
            <div class="w-32 h-32 bg-dark rounded-lg shadow mb-4 mx-auto"></div>
            <p class="text-lg font-medium">dark</p>
            <p class="text-sm text-gray-500">#101828</p>
          </div>
          <div class="text-center">
            <div class="w-32 h-32 bg-teal rounded-lg shadow mb-4 mx-auto"></div>
            <p class="text-lg font-medium">teal</p>
            <p class="text-sm text-gray-500">#007481</p>
          </div>
          <div class="text-center">
            <div class="w-32 h-32 bg-navy rounded-lg shadow mb-4 mx-auto"></div>
            <p class="text-lg font-medium">navy</p>
            <p class="text-sm text-gray-500">#00435c</p>
          </div>
        </div>
      </div>

      <!-- Usage Examples -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Usage Examples</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Primary Example -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-primary-700 mb-4">Primary Theme</h3>
            <p class="text-primary-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="bg-primary-500 hover:bg-primary-600 text-white px-4 py-2 rounded transition-colors">
              Primary Button
            </button>
          </div>

          <!-- Secondary Example -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-secondary-700 mb-4">Secondary Theme</h3>
            <p class="text-secondary-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="bg-secondary-500 hover:bg-secondary-600 text-white px-4 py-2 rounded transition-colors">
              Secondary Button
            </button>
          </div>

          <!-- Accent Example -->
          <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold text-accent-700 mb-4">Accent Theme</h3>
            <p class="text-accent-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <button class="bg-accent-500 hover:bg-accent-600 text-dark px-4 py-2 rounded transition-colors">
              Accent Button
            </button>
          </div>
        </div>
      </div>

      <!-- Text Color Examples -->
      <div class="mb-12">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Text Color Examples</h2>
        <div class="bg-white p-6 rounded-lg shadow">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div>
              <h4 class="font-semibold mb-2">Primary Text</h4>
              <p class="text-primary-500">text-primary-500</p>
              <p class="text-primary-600">text-primary-600</p>
              <p class="text-primary-700">text-primary-700</p>
            </div>
            <div>
              <h4 class="font-semibold mb-2">Secondary Text</h4>
              <p class="text-secondary-500">text-secondary-500</p>
              <p class="text-secondary-600">text-secondary-600</p>
              <p class="text-secondary-700">text-secondary-700</p>
            </div>
            <div>
              <h4 class="font-semibold mb-2">Special Text</h4>
              <p class="text-success">text-success</p>
              <p class="text-dark">text-dark</p>
              <p class="text-teal">text-teal</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
// Color testing page to showcase all custom Tailwind colors
</script>

<style scoped>
.hero-bg {
  background-image: url('https://picsum.photos/id/16/2500/1667');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
