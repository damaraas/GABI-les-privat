<script setup>
import { ref, computed, onMounted, onBeforeUnmount } from "vue";
import { LuChevronLeft, LuChevronRight } from "vue-icons-plus/lu";

const testimonials = [
  {
    name: "Bu Rina, Jakarta Selatan",
    desc: "Awalnya anak saya susah banget belajar, nilai matematikanya juga selalu di bawah rata-rata. Setelah ikut les privat ini, dia jadi lebih semangat belajar dan nilainya naik. Gurunya sabar, komunikatif, dan bisa membuat anak saya lebih semangat belajar",
  },
  {
    name: "Pak Budi, Bekasi",
    desc: "Anak saya biasanya cepat bosan belajar, tapi guru privat di sini bisa membuat belajar jadi lebih menyenangkan. Sekarang anak saya selalu menunggu jadwal les karena katanya lebih mudah paham dibanding di sekolah",
  },
  {
    name: "Andi, Siswa SMA",
    desc: "Saya ambil paket persiapan UTBK. Gurunya sangat paham strategi ujian, banyak trik cepat yang diajarkan. Hasil try out saya meningkat, jadi lebih percaya diri menghadapi ujian masuk perguruan tinggi",
  },
  {
    name: "Syifa, Mahasiswa Depok",
    desc: "Fleksibilitas jadwalnya membantu banget. Saya kuliah sambil kerja part time, jadi butuh belajar TOEFL dengan jadwal yang tidak kaku. Tutor selalu menyesuaikan dengan waktu saya, dan hasil skor TOEFL saya naik 120 poin",
  },
  {
    name: "Ibu Dwi, Bogor",
    desc: "Les privat ini membantu banget buat anak saya yang baru TK. Gurunya ngajarin calistung, sekarang jadi lebih percaya diri.",
  },
  {
    name: "Farhan, Siswa SMP",
    desc: "Saya merasa lebih siap menghadapi ujian sekolah karena materinya dijelasin dengan cara simpel. Nilai ulangan jadi gak jeblok lagi.",
  },
  {
    name: "Ryan, Mahasiswa Jakarta",
    desc: "Pengajar bahasa inggrisnya bikin belajar jadi fun, banyak latihan speaking juga. Jadi gak kaku lagi kalau harus ngobrol pakai english.",
  },
  {
    name: "Bu Dewi, Jakarta Selatan",
    desc: "Sebelum ikut les, anak saya suka bingung kalau ada PR. Sekarang malah sering bilang, 'Bu gampang kok soalnya'.",
  },
  {
    name: "Kezia, Siswi SMA",
    desc: "Waktu ulangan matematika biasanya panik. Setelah rutin les, soal-soalnya lebih gampang dipahami. Nilai pun naik lumayan jauh.",
  },
];

const currentSlide = ref(0);
const itemsPerSlide = ref(4); // default desktop

// total slide mengikuti jumlah item per slide
const totalSlides = computed(() =>
  Math.ceil(testimonials.length / itemsPerSlide.value)
);

// fungsi navigasi
const goToSlide = (index) => {
  if (index >= 0 && index < totalSlides.value) {
    currentSlide.value = index;
  }
};
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % totalSlides.value;
};
const prevSlide = () => {
  currentSlide.value =
    (currentSlide.value - 1 + totalSlides.value) % totalSlides.value;
};

// update itemsPerSlide sesuai lebar layar
const updateItemsPerSlide = () => {
  if (window.innerWidth < 640) {
    itemsPerSlide.value = 1; // mobile
  } else if (window.innerWidth < 1024) {
    itemsPerSlide.value = 2; // tablet
  } else {
    itemsPerSlide.value = 4; // desktop
  }
};

onMounted(() => {
  updateItemsPerSlide();
  window.addEventListener("resize", updateItemsPerSlide);
});
onBeforeUnmount(() => {
  window.removeEventListener("resize", updateItemsPerSlide);
});
</script>

<template>
  <section class="bg-secondary py-12">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold mb-2">Testimoni</h2>
      <p class="text-lg text-gray-800 mb-8">Apa Kata Siswa dan Orang Tua?</p>

      <!-- Wrapper carousel -->
      <div class="relative overflow-hidden">
        <div
          class="flex transition-transform duration-500"
          :style="{
            transform: `translateX(-${currentSlide * 100}%)`,
          }"
        >
          <!-- Slide -->
          <div
            v-for="(chunk, slideIndex) in totalSlides"
            :key="slideIndex"
            class="w-full flex-shrink-0 grid gap-6 px-2"
            :class="{
              'grid-cols-1': itemsPerSlide === 1,
              'grid-cols-2': itemsPerSlide === 2,
              'grid-cols-4': itemsPerSlide === 4,
            }"
          >
            <div
              v-for="(item, idx) in testimonials.slice(
                slideIndex * itemsPerSlide,
                (slideIndex + 1) * itemsPerSlide
              )"
              :key="idx"
              class="bg-white rounded-2xl shadow-lg p-6 text-left flex flex-col h-full"
            >
              <!-- Bintang -->
              <div class="flex justify-center mb-3">
                <span
                  v-for="n in 5"
                  :key="n"
                  class="text-yellow-400 text-xl"
                >
                  ★
                </span>
              </div>

              <!-- Isi -->
              <div class="flex-1">
                <p class="text-gray-700 text-sm leading-relaxed mb-4">
                  “{{ item.desc }}”
                </p>
              </div>

              <!-- Nama -->
              <p class="font-bold text-black text-sm mt-auto">
                – {{ item.name }}
              </p>
            </div>
          </div>
        </div>

        <!-- Tombol panah -->
        <button
          @click="prevSlide"
          class="absolute left-2 top-1/2 -translate-y-1/2 bg-primary text-white p-2 rounded-full shadow"
        >
          <LuChevronLeft class="w-5 h-5" />
        </button>
        <button
          @click="nextSlide"
          class="absolute right-2 top-1/2 -translate-y-1/2 bg-primary text-white p-2 rounded-full shadow"
        >
          <LuChevronRight class="w-5 h-5" />
        </button>
      </div>

      <!-- Pagination dots -->
      <div class="flex justify-center mt-6 space-x-2">
        <button
          v-for="index in totalSlides"
          :key="index"
          @click="goToSlide(index - 1)"
          class="w-3 h-3 rounded-full"
          :class="
            currentSlide === index - 1
              ? 'bg-primary'
              : 'bg-gray-300'
          "
        ></button>
      </div>
    </div>
  </section>
</template>

