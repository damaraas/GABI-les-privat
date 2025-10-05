<!-- Script Setup -->
<script setup>
  import AppLayout from '../Layouts/AppLayout.vue';
  import { ref } from "vue"

const showExtra = ref(false)

const mainTutors = [
  { img: "/img/tentanggabi/a1.png", alt: "Tutor Matematika", name: "Mr. Burhanudin" },
  { img: "/img/tentanggabi/a2.png", alt: "Tutor Bahasa Inggris", name: "Ms. Nazwa Zachra Bayyinah" },
  { img: "/img/tentanggabi/a3.png", alt: "Tutor Fisika", name: "Ms. Dwi Kurnia Putri" },
  { img: "/img/tentanggabi/a4.png", alt: "Tutor Kimia", name: "Ms. Elfrida" },
  { img: "/img/tentanggabi/a6.png", alt: "Tutor Biologi", name: "Mr. Dharma Bintang Aditya" },
  { img: "/img/tentanggabi/a5.png", alt: "Tutor Sejarah", name: "Ms. Rosy Meiliasari" },
  { img: "/img/tentanggabi/a8.png", alt: "Tutor Geografi", name: "Ms. Hani" },
  { img: "/img/tentanggabi/a7.png", alt: "Tutor Ekonomi", name: "Ms. Suci" },
]

const extraTutor = {
  img: "/img/tentanggabi/a9.png",
  alt: "Tutor Tambahan",
  name: "Mr. Farhan Latifna"
}

function toggleTutors() {
  showExtra.value = !showExtra.value
}
</script>

<template>
  <AppLayout>

    <!-- Jumbotron -->
    <section id="jumbotron">
        <div class="container mx-auto px-4 bg-[#FDD636]">
            <div class="flex flex-wrap">
              <div class="w-full px-4">
                <h1 class="font-bold text-center text-4xl mt-20">Belajar Lebih Personal, Prestasi Lebih Maksimal</h1>
                <p class="mt-10 text-justify pl-20 pr-20">
                  Gabi les privat hadir sebagai solusi untuk kebutuhan bimbingan belajar dan les privat di 
                  Jabodetabek dan Pulau Jawa. Dengan tutor berpengalaman, kami percaya setiap siswa punya 
                  potensi unik yang bisa dikembangkan melalui pembelajaran personal. Gabi les privat 
                  berkomitmen menyediakan pengalaman belajar yang interaktif, adaptif, dan menyenangkan dalam 
                  semua mata pelajaran.
                </p>
                <div class="flex items-center justify-center">
                  <img src="../../../public/img/tentanggabi/model-anak.png" alt=""></img>
                </div>
              </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section id="visi_misi">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap mt-30">
          <h1 class="w-full font-bold text-center text-4xl mt-10">Visi Misi Gabi</h1>
          <div class="flex flex-col lg:flex-row justify-between items-stretch gap-10 mt-10 mb-30">
            <!-- bagian visi -->
            <div class="flex-1 flex flex-col">
              <h1 class="text-[#11B2F7] text-3xl font-bold">Visi</h1>
              <p class="mt-10 text-justify flex-grow text-2xl">
                Menjadi penyedia les privat terbaik di Jabodetabek dan Pulau Jawa yang membantu siswa 
                meraih prestasi akademik dan membentuk generasi yang cerdas, kritis, dan siap bersaing di 
                era global.
              </p>
              <img src="../../../public/img/tentanggabi/7.png" class="w-full max-w-xs mx-auto mt-6 object-contain" alt="Visi Gabi">
            </div>
            <!-- bagian Misi -->
            <div class="flex-1 flex flex-col">
              <h1 class="text-[#11B2F7] text-3xl font-bold">Misi</h1>
              <ul class="list-disc pl-6 space-y-2 mt-10 flex-grow pr-20 text-2xl text-justify">
                <li>Menyediakan tutor privat berpengalaman sesuai bidangnya.</li>
                <li>Memberikan metode belajar interaktif dan menyesuaikan dengan minat, bakat, serta kebutuhan siswa.</li>
                <li>Menjadi teman belajar yang mendukung pemahaman semua mata pelajaran.</li>
                <li>
                  Membantu siswa dari berbagai jenjang mulai dari 
                  les privat TK, les privat SD, 
                  les privat SMP, les privat SMA, 
                  hingga les privat Universitas dengan pembelajaran 
                  yang fokus, personal dan relevan.
                </li>
              </ul>
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
          <p class="text-center bg-[#FDD636] pt-20 pb-20 pl-5 pr-5 rounded-2xl max-w-5xl shadow-lg mb-10">
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
          <div class="text-center col-span-2 md:col-span-4 justify-self-center">
            <img 
              :src="extraTutor.img" 
              class="w-32 h-32 mx-auto object-cover rounded-full" 
              :alt="extraTutor.alt">
            <h3 class="font-semibold">{{ extraTutor.name }}</h3>
          </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-evenly mt-10">
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
        <h1 class="text-center text-white text-3xl md:text-4xl font-bold mb-12 leading-snug">
          Telah diliput oleh berbagai media, <span class="text-yellow-200">GABI</span> diakui sebagai solusi belajar terpercaya
        </h1>

        <!-- Grid logo media -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-8 items-center">
          <div class="text-center">
            <img src="../../../../public/img/tentanggabi/11.png" 
                class="w-64 h-64 mx-auto object-contain  transition" 
                alt="Media 1">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/12.png" 
                class="w-64 h-64 mx-auto object-contain transition" 
                alt="Media 2">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/13.png" 
                class="w-64 h-64 mx-auto object-contain  transition" 
                alt="Media 3">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/14.png" 
                class="w-64 h-64 mx-auto object-contain  transition" 
                alt="Media 4">
          </div>
          <div class="text-center">
            <img src="../../../public/img/tentanggabi/15.png" 
                class="w-64 h-64 mx-auto object-contain  transition" 
                alt="Media 5">
          </div>
        </div>
        <img src="../../../public/img/tentanggabi/8.png" alt="" class="w-64 h-64 mx-auto">
      </div>
    </section>


    <!-- Siap Tingkatkan -->
    <section id="nilai">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap mt-30">
          <h1 class="w-full font-bold text-center text-4xl mt-20">Siap Tigkatkan Prestasi Belajar ? </h1>
          <h2 class="w-full text-2xl text-center mt-10 pl-15 pr-15">
            Yuk, coba trial class gratis atau langsung konsultasi kebutuhan belajarmu. Hubungi MinBi sekarang 
            dan temukan tutor terbaik
          </h2>
          <div class="w-full flex justify-center items-center mt-10 mb-30">
            <button class="bg-yellow-400 text-black text-center font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-yellow-500 transition duration-300">
              Hubungi Kami
            </button>
          </div>
        </div>
      </div>
    </section>

  </AppLayout>
</template>