<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";

// array logo kurikulum
const logos = [
  "/img/kurikulum/Cambrige.png",
  "/img/kurikulum/ib.png",
  "/img/kurikulum/Singapore.png",
  "/img/kurikulum/nasional.png",
];
</script>

<template>
  <div class="max-w-7xl flex flex-col lg:flex-row px-6 md:px-10 w-full py-5 bg-gray-100">
    <!-- LEFT CONTENT -->
    <div class="w-full lg:w-7/12 space-y-6 text-center lg:text-left py-6 lg:py-10 lg:px-10">
      <h1
        class="text-lg sm:text-2xl md:text-3xl lg:text-2xl font-bold leading-snug sm:leading-tight text-gray-900 font-onest"
      >
        Les Privat TK, SD, SMP, SMA, MAHASISWA dan KARYAWAN Terbaik di
        Jabodetabek dan Pulau Jawa. Semua Pelajaran, Semua Jenjang.
        <span class="font-bold text-blue-800">Satu Solusi GABI</span>
      </h1>
      <p class="text-gray-500 text-xs sm:text-sm md:text-base font-onest font-extralight">
        GABI siapkan guru privat ke rumah atau online buat semua mata
        pelajaran dari TK sampai SMA bahkan kuliah. GABI punya ribuan
        guru berpengalaman yang bisa disesuaikan sama kebutuhan kamu.
      </p>

      <!-- CTA Button -->
      <div>
        <a
          href="https://wa.me/6281234567890"
          class="inline-flex items-center px-4 py-2 sm:px-6 sm:py-3 bg-green hover:bg-green-600 text-white text-sm sm:text-md font-semibold rounded-lg shadow transition"
        >
          <SiWhatsapp class="mr-2 w-4 h-4 sm:w-5 sm:h-5" />Cari Guru
        </a>
      </div>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="w-full lg:w-5/12 flex justify-center relative mt-6 lg:mt-0">
      <div class="relative">
        <!-- Polygon Background -->
        <div
          class="absolute top-[2.5rem] sm:top-[3.5rem] left-0 polygon 
          bg-[radial-gradient(circle,_#feeca4_26%,_#fdd636_60%,_#fdb436_100%)] 
          z-0 rounded-full w-[220px] h-[220px] sm:w-[280px] sm:h-[280px] md:w-[310px] md:h-[310px]"
        ></div>
        <!-- Gambar -->
        <img
          :src="'/img/maskot/Maskot-Gabi.png'"
          alt="Student"
          class="w-48 sm:w-60 md:w-72 rounded-lg relative left-2 sm:left-3 "
        />
      </div>
    </div>
  </div>

  <!-- kurikulum -->
  <div class="max-w-7xl px-4 sm:px-6 md:px-10 w-full py-8 sm:py-10 relative -top-16 lg:-top-10">
    <div class="bg-primary p-2 sm:p-3 rounded-xl w-full overflow-hidden">
      <div class="flex items-center gap-6 sm:gap-10 animate-slide">
        <!-- Looping dua kali supaya infinite -->
        <template v-for="n in 2" :key="n">
          <img
            v-for="(logo, i) in logos"
            :key="`${n}-${i}`"
            :src="logo"
            alt="kurikulum"
            class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 object-contain"
          />
        </template>
      </div>
    </div>
  </div>
</template>

<style scoped>
@keyframes slide {
  0% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-50%);
  }
}
.animate-slide {
  display: flex;
  width: max-content;
  animation: slide 12s linear infinite;
}
</style>
