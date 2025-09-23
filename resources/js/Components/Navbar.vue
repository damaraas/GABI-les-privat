<template>
  <div>
    <!-- Promo Banner -->
    <div class="bg-gradient-to-r from-orange-300 via-orange-400 to-orange-500 px-4 py-2 relative overflow-hidden">
      <div class="absolute inset-0 opacity-10">
        <!-- Background pattern -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-white rounded-full -translate-x-16 -translate-y-16"></div>
        <div class="absolute top-0 right-0 w-24 h-24 bg-white rounded-full translate-x-12 -translate-y-12"></div>
        <div class="absolute bottom-0 left-1/4 w-20 h-20 bg-white rounded-full translate-y-10"></div>
      </div>
      
      <div class="relative flex items-center justify-center gap-6 text-sm">
        <!-- Left Promo -->
        <div class="flex items-center gap-2 text-white">
          <span class="bg-teal-500 text-white px-2 py-1 rounded text-xs font-medium">TRIAL GRATIS</span>
          <span class="text-red-600 font-bold bg-white px-2 py-1 rounded text-xs">DISKON</span>
          <span class="text-teal-600 font-bold text-lg">10%</span>
          <span class="text-white font-medium">untuk semua kelas</span>
          <span class="text-yellow-300 text-lg">✨</span>
        </div>

        <!-- Right Promo -->
        <div class="flex items-center gap-2 text-white">
          <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs font-medium">info</span>
          <span class="text-red-600 font-bold bg-white px-2 py-1 rounded text-xs">DISKON</span>
          <span class="text-red-600 font-bold text-xl">10%</span>
          <span class="bg-teal-500 text-white px-2 py-1 rounded text-xs font-medium">TRIAL GRATIS</span>
          <span class="text-yellow-300 text-lg">⭐</span>
        </div>
      </div>
    </div>

    <!-- Main Navbar -->
    <nav class="bg-white shadow-md px-4 py-3">
      <div class="max-w-7xl mx-auto flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
          <Link :href="route('home')" class="flex items-center gap-2">
            <!-- Placeholder untuk logo - nanti di ganti dengan logo asli -->
            <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-teal-500 rounded-full flex items-center justify-center">
              <span class="text-white font-bold text-sm">Logo</span>
            </div>
            <div>
              <span class="text-blue-600 font-bold text-xl">Ga</span>
              <span class="text-teal-500 font-bold text-xl">Bi</span>
              <div class="text-xs text-gray-500 -mt-1">PLATFORM</div>
            </div>
          </Link>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-8">
          <Link 
            :href="route('home')" 
            class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            :class="{ 'text-blue-600 border-b-2 border-blue-600 pb-1': $page.component === 'Beranda' }"
          >
            Beranda
          </Link>
          <Link 
            :href="route('promo')" 
            class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            :class="{ 'text-blue-600 border-b-2 border-blue-600 pb-1': $page.component === 'Promo' }"
          >
            Promo
          </Link>
          <Link 
            :href="route('diskon')" 
            class="bg-yellow-400 text-gray-800 px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition-colors duration-200"
          >
            DISKON & TRIAL HARI INI
          </Link>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
          <button 
            @click="mobileMenuOpen = !mobileMenuOpen"
            class="text-gray-700 hover:text-blue-600 focus:outline-none"
          >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>

      <!-- Mobile Menu -->
      <div v-show="mobileMenuOpen" class="md:hidden mt-4 pb-4 border-t border-gray-200">
        <div class="flex flex-col gap-4 mt-4">
          <Link 
            :href="route('home')" 
            class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            :class="{ 'text-blue-600': $page.component === 'Beranda' }"
            @click="mobileMenuOpen = false"
          >
            Beranda
          </Link>
          <Link 
            :href="route('promo')" 
            class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            :class="{ 'text-blue-600': $page.component === 'Promo' }"
            @click="mobileMenuOpen = false"
          >
            Promo
          </Link>
          <Link 
            :href="route('diskon')" 
            class="bg-yellow-400 text-gray-800 px-4 py-2 rounded-md font-medium hover:bg-yellow-500 transition-colors duration-200 text-center"
            @click="mobileMenuOpen = false"
          >
            DISKON & TRIAL HARI INI
          </Link>
        </div>
      </div>
    </nav>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'

const mobileMenuOpen = ref(false)
</script>