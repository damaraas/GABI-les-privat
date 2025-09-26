<script setup>
import { Fa6Whatsapp } from 'vue-icons-plus/fa6'

defineProps({
  whatsappNumber: {
    type: String,
    default: '6281234567890'
  },
  title: {
    type: String,
    default: 'Butuh Les Privat?'
  },
  buttonText: {
    type: String,
    default: 'Japri Admin Sekarang'
  }
})
</script>
<template>
  <section class="bg-gradient-to-br from-blue-400 to-blue-600 py-16 px-4">
    <div class="max-w-6xl mx-auto">
      <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
        <!-- Text Content -->
        <div class="text-center lg:text-left lg:flex-1">
          <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-8">
            Butuh Les Privat?
          </h2>

          <!-- CTA Button -->
          <a href="https://wa.me/6281234567890" target="_blank"
            class="inline-flex items-center gap-3 bg-green-500 hover:bg-green-600 text-white font-semibold text-lg md:text-xl px-8 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
            <Fa6Whatsapp class="w-10 h-10" />
            Japri Admin Sekarang
          </a>
        </div>

        <!-- Lightbulb Character -->
        <div class="relative">
          <div class="absolute inset-0 rounded-full bg-gradient-to-r from-blue-400 to-blue-400 opacity-30 z-10"></div>

          <img :src="'/img/maskot/Maskot-cta.png'" alt="Lightbulb Character"
            class="w-64 md:w-80 lg:w-96 h-auto relative z-10" />
        </div>
      </div>
    </div>
  </section>
</template>