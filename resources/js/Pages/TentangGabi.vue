<!-- Script Setup -->
<script setup>
import AppLayout from '../Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
import { ref } from 'vue'

const showExtra = ref(false)

const mainTutors = [
  { img: '/img/tentanggabi/a1.webp', alt: 'Tutor Matematika', name: 'Mr. Burhanudin' },
  { img: '/img/tentanggabi/a2.webp', alt: 'Tutor Bahasa Inggris', name: 'Ms. Nazwa Zachra Bayyinah' },
  { img: '/img/tentanggabi/a3.webp', alt: 'Tutor Fisika', name: 'Ms. Dwi Kurnia Putri' },
  { img: '/img/tentanggabi/a4.webp', alt: 'Tutor Kimia', name: 'Ms. Elfrida' },
  { img: '/img/tentanggabi/a6.webp', alt: 'Tutor Biologi', name: 'Mr. Dharma Bintang Aditya' },
  { img: '/img/tentanggabi/a5.webp', alt: 'Tutor Sejarah', name: 'Ms. Rosy Meiliasari' },
  { img: '/img/tentanggabi/a8.webp', alt: 'Tutor Geografi', name: 'Ms. Hani' },
  { img: '/img/tentanggabi/a7.webp', alt: 'Tutor Ekonomi', name: 'Ms. Suci' },
]

const extraTutors = [
  { img: '/img/tentanggabi/a9.webp', alt: 'Tutor Tambahan 1', name: 'Mr. Farhan Latifna' },
  { img: '/img/tentanggabi/a10.webp', alt: 'Tutor Tambahan 2', name: 'Ms. Lola' },
  { img: '/img/tentanggabi/a11.webp', alt: 'Tutor Tambahan 3', name: 'Ms. Nurma' },
]

function toggleTutors() {
  showExtra.value = !showExtra.value
}

const phone = "6285712230349";
const message = "Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu? 😊";
const waLink = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>


<template>
  <Head title="Tentang GABI Les Privat" />
  <AppLayout>

    <!-- Jumbotron -->
    <section id="jumbotron">
      <div class="container mx-auto px-4 bg-[#FDD636]">
        <div class="flex flex-wrap">
          <div class="w-full px-4">

            <h1 class="font-bold text-center 
                      text-2xl sm:text-3xl md:text-4xl 
                      lg:text-4xl lg:mt-20">
              Belajar Lebih Personal, Prestasi Lebih Maksimal
            </h1>

            <!-- Deskripsi -->
            <p class="mt-6 sm:mt-8 text-justify 
                      text-sm sm:text-base md:text-lg 
                      px-6 sm:px-10 md:px-20 lg:pl-20 lg:pr-20">
              Gabi les privat hadir sebagai solusi untuk kebutuhan bimbingan belajar dan les privat di 
              Jabodetabek dan Pulau Jawa. Dengan tutor berpengalaman, kami percaya setiap siswa punya 
              potensi unik yang bisa dikembangkan melalui pembelajaran personal. Gabi les privat 
              berkomitmen menyediakan pengalaman belajar yang interaktif, adaptif, dan menyenangkan dalam 
              semua mata pelajaran.
            </p>

            <!-- Gambar -->
            <div class="flex items-center justify-center mt-8 lg:mt-0">
              <img 
                src="../../../public/img/tentanggabi/model-anak.webp" 
                alt="Model anak Gabi Les Privat"
                class="w-4/5 sm:w-2/3 md:w-1/2 lg:w-auto object-contain"
              >
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- Visi Misi -->
    <section id="visi_misi">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap mt-10 lg:mt-30">
          
          <!-- Judul Utama -->
          <h1 class="w-full font-bold text-center text-2xl sm:text-3xl lg:text-4xl mt-10">
            Visi Misi Gabi
          </h1>

          <!-- Wrapper utama -->
          <div class="flex flex-col lg:flex-row justify-between items-stretch gap-8 sm:gap-10 mt-10 mb-10 lg:mb-30">

            <!-- Bagian Visi-->
            <div class="flex-1 flex flex-col order-1 lg:order-1">
              <h2 class="text-[#11B2F7] text-xl sm:text-2xl lg:text-3xl font-bold text-left">
                Visi
              </h2>
              <p class="mt-6 sm:mt-8 text-justify text-base sm:text-lg lg:text-2xl leading-relaxed flex-grow">
                Menjadi penyedia les privat terbaik di Jabodetabek dan Pulau Jawa yang membantu siswa 
                meraih prestasi akademik dan membentuk generasi yang cerdas, kritis, dan siap bersaing di 
                era global.
              </p>

              <!-- Gambar (muncul di bawah Visi untuk laptop -->
              <img 
                src="../../../public/img/tentanggabi/7.webp" 
                alt="Visi Gabi"
                class="hidden lg:block w-full max-w-xs mx-auto mt-6 object-contain"
              >
            </div>

            <!-- Bagian Misi  -->
            <div class="flex-1 flex flex-col order-2 lg:order-2">
              <h2 class="text-[#11B2F7] text-xl sm:text-2xl lg:text-3xl font-bold text-left">
                Misi
              </h2>
              <ul class="list-disc pl-6 sm:pl-8 mt-6 sm:mt-8 flex-grow text-base sm:text-lg lg:text-2xl text-justify space-y-3 sm:space-y-4 lg:pr-20">
                <li>Menyediakan tutor privat berpengalaman sesuai bidangnya.</li>
                <li>Memberikan metode belajar interaktif dan menyesuaikan dengan minat, bakat, serta kebutuhan siswa.</li>
                <li>Menjadi teman belajar yang mendukung pemahaman semua mata pelajaran.</li>
                <li>
                  Membantu siswa dari berbagai jenjang mulai dari 
                  les privat TK, les privat SD, 
                  les privat SMP, les privat SMA, 
                  hingga les privat Universitas dengan pembelajaran 
                  yang fokus, personal, dan relevan.
                </li>
              </ul>
            </div>

            <!--  Gambar untuk Mobile (di bawah Misi) -->
            <div class="lg:hidden order-3 w-full flex justify-center mt-8">
              <img 
                src="../../../public/img/tentanggabi/7.webp" 
                alt="Visi Gabi"
                class="w-3/4 sm:w-2/3 max-w-xs object-contain"
              >
            </div>

          </div>
        </div>
      </div>
    </section>





    <!-- Nilai Kami -->
    <section id="nilai">
      <div class="container mx-auto px-4 bg-[#11B2F7] py-16">
        <div class="flex flex-col items-center">
          <!-- Judul -->
          <h1 class="text-white font-bold text-center text-4xl mb-8">
            Nilai Kami
          </h1>

          <!-- Paragraf -->
          <p class="text-justify lg:text-center bg-[#FDD636] pt-20 pb-20 pl-5 pr-5 rounded-2xl max-w-5xl shadow-lg mb-10">
            Di Gabi, kami percaya setiap anak memiliki potensi unik. Karena itu, metode pengajaran 
            selalu disesuaikan dengan kebutuhan, karakter, dan gaya belajar masing-masing siswa. Kami 
            ingin menumbuhkan rasa cinta belajar yang membuat anak terdorong untuk terus berkembang. 
            Pengajar kami hadir sebagai pendamping yang hangadan penuh dukungan, menciptakan ruang 
            belajar yang nyaman agar setiap anak berani bereksplorasi dan berkembang dengan caranya 
            sendiri.
          </p>
        </div>
      </div>
    </section>


    <!-- Testimoni -->
    <section id="testimoni">
      <div class="container mx-auto px-4 py-16">
        <h1 class="font-bold text-center text-4xl mb-12">
          Apa Kata Mereka Tentang Gabi
        </h1>

        <!-- Grid untuk rating & testimoni -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-20">
                  
                  <!-- Bagian rating -->
                <div class="bg-[#11B2F7] rounded-2xl p-8 text-center shadow-md w-full flex flex-col items-center justify-center">
          <!-- Rating angka -->
          <div class="flex items-baseline text-white font-bold leading-none mt-10">
            <span class="text-7xl md:text-8xl font-extrabold">4.8</span>
            <span class="text-xl md:text-2xl ml-1">/5.0</span>
          </div>

          <!-- Rating bintang emoji -->
          <div class="text-3xl md:text-4xl mt-1 text-[#FDD636] mb-15">
            ⭐⭐⭐⭐☆
          </div>
        </div>


          <!-- Bagian testimoni -->
          <div>
            <h2 class="text-xl font-semibold mb-4">
              Lebih dari <span class="text-[#11B2F7] font-bold">956+</span> siswa mempercayai Gabi sebagai teman belajar mereka
            </h2>
            <ul class="space-y-3 list-disc list-inside text-gray-700">
              <li>"Gurunya sabar, selalu bikin mood baik" <span class="italic">(Chika, les privat SMP)</span></li>
              <li>"Belajar fisika ga pernah segampang ini" <span class="italic">(Prasetyo, les privat SMA)</span></li>
              <li>"Bersyukur bgt kenal Gabi, strategi ngerjain soalnya bnrn ngebantu" <span class="italic">(Dian, Les persiapan SNBT)</span></li>
              <li>"Maaf ya kak tutor, aku kadang susah diajari, tapi tetep sabar" <span class="italic">(Gibran, Les privat SD)</span></li>
              <li>"Aku suka kalau dapat stiker kalau jawabanku benar" <span class="italic">(Lia, Les privat TK)</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>


    <!-- Pilih Tutor Terbaik Gabi -->
 <section id="tutor">
    <div class="container mx-auto px-4 py-16 bg-[#FDD636]">
      <h1 class="font-bold text-center text-4xl mb-12">
        Pilih Tutor Terbaik Gabi Untukmu
      </h1>

      <div class="bg-white p-8 rounded-2xl shadow-md max-w-4xl mx-auto">
        
        <!-- Grid tutor utama -->
        <div v-if="!showExtra" class="grid grid-cols-2 md:grid-cols-4 gap-8">
          <div v-for="(tutor, i) in mainTutors" :key="i" class="text-center">
            <img 
              :src="tutor.img" 
              class="w-32 h-32 mx-auto object-cover rounded-full" 
              :alt="tutor.alt">
            <h3 class="font-semibold">{{ tutor.name }}</h3>
          </div>
        </div>

        <!-- Tutor tambahan -->
        <div v-else class="mt-8">
          <div class="flex flex-wrap justify-center gap-8">
            <div 
              v-for="(tutor, i) in extraTutors" 
              :key="i" 
              class="text-center"
            >
              <img 
                :src="tutor.img" 
                class="w-32 h-32 mx-auto object-cover rounded-full" 
                :alt="tutor.alt"
              >
              <h3 class="font-semibold mt-2">{{ tutor.name }}</h3>
            </div>
          </div>
        </div>

        <!-- Tombol -->
        <div class="flex flex-col sm:flex-row sm:justify-evenly mt-10 gap-4 sm:gap-0">
          <button class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg shadow">
            Mulai Belajar
          </button>
          <button 
            @click="toggleTutors" 
            class="bg-gray-400 hover:bg-gray-500 text-white font-semibold py-2 px-6 rounded-lg shadow">
            {{ showExtra ? "Kembali" : "Lihat Tutor Lainnya" }}
          </button>
        </div>

      </div>
    </div>
  </section>

    <!-- Partnership -->
    <section id="partnership">
      <div class="container mx-auto px-4 py-16 bg-[#11B2F7]">
        <h1 class="text-center text-white text-lg sm:text-2xl md:text-4xl font-bold mb-12 leading-snug">
          Telah diliput oleh berbagai media, 
          <span class="text-yellow-200">GABI</span> diakui sebagai solusi belajar terpercaya
        </h1>


        <!-- Grid logo media -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 items-center">
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/11.webp" 
                class="w-40 sm:w-48 md:w-64 h-auto mx-auto object-contain transition" 
                alt="Media 1">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/12.webp" 
                class="w-40 sm:w-48 md:w-64 h-auto mx-auto object-contain transition" 
                alt="Media 2">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/13.webp" 
                class="w-40 sm:w-48 md:w-64 h-auto mx-auto object-contain transition" 
                alt="Media 3">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/14.webp" 
                class="w-40 sm:w-48 md:w-64 h-auto mx-auto object-contain transition" 
                alt="Media 4">
          </div>

          <!-- Logo terakhir (tengah di mobile) -->
          <div class="col-span-2 sm:col-span-1 flex justify-center md:block">
            <img src="../../../public/img/tentanggabi/15.webp" 
                class="w-40 sm:w-48 md:w-64 h-auto mx-auto object-contain transition" 
                alt="Media 5">
          </div>
        </div>

        <!-- Gambar tambahan bawah -->
        <img src="../../../public/img/tentanggabi/8.webp" alt="" class="w-64 h-64 mx-auto mt-10 object-contain">
      </div>
    </section>


    <!-- Siap Tingkatkan -->
    <section id="nilai">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap mt-20 lg:mt-30">
          
          <!-- Judul -->
          <h1 class="w-full font-bold text-center 
                    text-2xl sm:text-3xl lg:text-4xl 
                    mt-10 lg:mt-20">
            Siap Tingkatkan Prestasi Belajar?
          </h1>
          
          <!-- Subjudul-->
         <h2 class="w-full text-center 
                    text-base sm:text-lg lg:text-2xl 
                    mt-6 sm:mt-8 lg:mt-10 
                    px-4 sm:px-5 lg:px-13 
                    max-w-6xl mx-auto">
            Yuk, coba trial class gratis atau langsung konsultasi kebutuhan belajarmu.  
            Hubungi MinBi sekarang dan temukan tutor terbaik.
          </h2>    

          <!-- Tombol -->
          <div class="w-full flex justify-center items-center mt-8 sm:mt-10 lg:mt-10 mb-30 lg:mb-30">
            <a :href="waLink" target="_blank" rel="noopener noreferrer">
              <button class="bg-yellow-400 text-black text-center font-semibold 
                  px-15 py-3 rounded-lg shadow-lg 
                  hover:bg-yellow-500 transition duration-300">
                Hubungi Kami
              </button>
            </a>
          </div>
          
        </div>
      </div>
    </section>


  </AppLayout>
</template>