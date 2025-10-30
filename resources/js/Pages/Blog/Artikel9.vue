<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Cta from '../HomePage/Components/Cta.vue';

// terima props dari Laravel
const props = defineProps({
  slug: {
    type: String,
    default: 'tidak-ada-slug',
  },
});

const judul = "Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan";
</script>

<template>
  <AppLayout> 
    <Head>
        <title> Les Privat Tatap Muka vs Online Mana yang Lebih Cocok untuk Kamu</title>
    </Head>
    <section class="max-w-4xl mx-auto p-6">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-4">
            <a href="/blog" class="text-[#11B2F7] hover:underline">Beranda</a>
            <span class="mx-2">/</span>
            <span class="text-gray-600">Les Privat Tatap Muka vs Online Mana yang Lebih Cocok untuk Kamu</span>
        </nav>

        <!-- Hero / Judul -->
        <header class="text-center mb-6">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold leading-tight">Les Privat Tatap Muka vs Online Mana yang Lebih Cocok untuk Kamu</h1>
        </header>

        <!-- Gambar utama -->
        <div class="w-full flex justify-center my-6">
            <img src="../../../../public/img/artikel9/a1.webp" alt="Les Online Vs Tatap Muka" class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[50%] shadow-md object-cover"/>
        </div>

        <article class="prose prose-lg">
            <!-- Section Pertama -->
             <p class="text-justify mb-5">
                Di era digital ini, cara belajar semakin beragam. Kalau dulu les privat hanya dikenal 
                sebagai guru datang ke rumah, sekarang ada pilihan baru yaitu les privat online. Banyak 
                siswa SMP, SMA, hingga mahasiswa sering bingung harus pilih yang mana.
             </p>

             <p class="text-justify mb-5">
                Tantangannya jelas: sebagian siswa lebih fokus kalau bertemu langsung dengan guru, tapi 
                sebagian lain merasa lebih nyaman belajar online dari rumah. Ada yang bilang tatap muka 
                lebih efektif karena bisa langsung tanya-jawab tanpa gangguan jaringan, sementara online 
                dianggap lebih fleksibel karena bisa dilakukan dari mana saja.
             </p>
             <p class="text-justify mb-5">
                Nah, pertanyaan utamanya: mana yang lebih cocok buat kamu? Supaya nggak salah pilih, yuk 
                kita bahas plus minusnya masing-masing. Dengan begitu, kamu bisa memutuskan apakah les 
                privat tatap muka atau online yang paling sesuai dengan kebutuhan belajarmu.
             </p>
             <p class="text-justify mb-5">
                Kalau kamu masih ragu, tenang saja ada solusi. <a href="https://gabi.bimbelprivatjkt.com/" target="_blank"
                rel="noopener noreferrer" class="text-[#11B2F7] font-semibold hover:underline"> GABI Les Privat </a>  hadir
                dengan dua pilihan metode, tatap muka dan online, yang sama-sama efektif. Jadi, apapun 
                gaya belajarmu, ada pendampingan terbaik yang siap bikin belajar lebih fokus, nyaman, dan 
                menyenangkan.
             </p>
            
            <!-- Section 2 -->
             <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-15 mb-6">
                Les Privat Tatap Muka
             </h2>

             <p class="text-justify mb-5">
                Les privat tatap muka adalah metode belajar tradisional di mana guru datang langsung ke 
                rumah atau bertemu di tempat tertentu. Model ini sudah ada sejak lama dan jadi favorit 
                banyak orangtua karena dianggap lebih aman dan fokus.
             </p>

             <div class="max-w-3xl mt-8 mb-5">
                <p class="font-semibold text-gray-800 mb-3">Kelebihan Les Privat Tatap Muka:</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 leading-relaxed">
                    <li>Siswa bisa berinteraksi langsung dengan guru.</li>
                    <li>Penjelasan lebih mudah dipahami karena ada kontak mata dan bahasa tubuh.</li>
                    <li>Guru bisa langsung melihat ekspresi bingung anak dan segera menjelaskan ulang.</li>
                </ul>
             </div>

             <p class="text-justify mb-5">
                Namun, ada juga kekurangannya: jadwal kadang kurang fleksibel, butuh waktu perjalanan, 
                dan biasanya biaya sedikit lebih tinggi karena guru datang langsung.
             </p>
            
            <!-- Section 3 -->
             <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-15 mb-6">
                Les Privat Online
             </h2>

             <p class="text-justify mb-5">
                Les privat online mulai populer sejak pandemi. Dengan memanfaatkan Zoom, Google Meet, 
                atau aplikasi khusus belajar, siswa bisa bertemu guru tanpa harus tatap muka.
             </p>

             <div class="max-w-3xl mt-8 mb-5">
                <p class="font-semibold text-gray-800 mb-3">Kelebihannya:</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 leading-relaxed">
                    <li>Lebih fleksibel karena bisa belajar dari mana saja.</li>
                    <li>Hemat waktu perjalanan.</li>
                    <li>Pilihan guru lebih luas, bahkan bisa dari kota lain.</li>
                </ul>
             </div>

             <p class="text-justify mb-5">
                Tapi tantangannya juga nyata: koneksi internet yang tidak stabil bisa mengganggu kelas, 
                dan siswa mudah terdistraksi karena belajar lewat gadget. Selain itu, interaksi emosional 
                dengan guru kadang terasa lebih minim dibanding tatap muka.
             </p>

             <!-- Section 4 -->
             <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-15 mb-6">
                 Les Privat Tatap Muka vs Online – Mana yang Lebih Efektif?
             </h2>

             <div class="max-w-3xl mt-8 mb-5">
                <p class="font-semibold text-gray-800 mb-3">Kalau bicara efektivitas, jawabannya 
                    tergantung kebutuhan tiap siswa.</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 leading-relaxed">
                    <li>Tatap muka lebih efektif untuk siswa yang kesulitan fokus, butuh bimbingan intens,
                        atau sering bingung saat mengerjakan soal.</li>
                    <li>Online lebih efektif untuk siswa yang mandiri, terbiasa dengan teknologi, dan 
                        ingin fleksibilitas waktu.</li>
                </ul>
             </div>

             <p class="text-justify mb-5">
                Contoh nyata: kalau kamu kesulitan memahami rumus matematika yang rumit, guru privat 
                tatap muka bisa langsung menuliskan step by step di papan tulis mini atau buku catatanmu. 
                Tapi kalau kamu hanya butuh review materi sebelum ujian, online bisa jadi pilihan cepat 
                dan hemat.
             </p>

             <a
                href="https://gabi.bimbelprivatjkt.com/blog/cara-mengatur-waktu-belajar-efektif-dengan-pomodoro-technique"
                title="Teknik Belajar Pomodoro Technique"
                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-medium transition-colors duration-150"
                >
                Teknik Belajar Pomodoro Technique
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h-4 ml-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12l-3.75 3.75M3 12h18" />
                </svg>
             </a>

             <!-- Section 5 -->
             <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-15 mb-6">
                 Mana yang Lebih Nyaman untuk Belajar?
             </h2>
             
             <div class="max-w-3xl mt-8 mb-5">
                <p class="font-semibold text-gray-800 mb-3">Nyaman itu relatif, tapi ada beberapa hal 
                  yang bisa jadi pertimbangan:</p>
                <ul class="list-disc list-inside space-y-2 text-gray-700 leading-relaxed">
                    <li>Suasana belajar: tatap muka biasanya lebih serius karena guru hadir langsung. 
                     Online kadang lebih santai tapi juga lebih mudah terdistraksi.</li>
                    <li>Kontrol orangtua: tatap muka memungkinkan orang tua memantau langsung. Online 
                     lebih sulit dipantau karena anak belajar lewat laptop/HP.
                    </li>
                    <li>Gaya belajar: anak visual mungkin lebih cocok online dengan slide presentasi, 
                     sementara anak kinestetik lebih pas tatap muka dengan alat peraga nyata.</li>
                </ul>
             </div>

             <p class="text-justify mb-5">
                Dengan memahami gaya belajar, kamu bisa tahu apakah lebih nyaman bersama guru yang hadir 
                di rumah atau cukup lewat layar.
             </p>

             <!-- Section 6 -->
              <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-15 mb-6">
                 Tips Memilih Les Privat yang Tepat
             </h2>

             <div class="w-full flex justify-center my-6">
                  <img src="../../../../public/img/artikel9/a3.webp" alt="Les Privat Tatap Muka vs Les Privat Online.jpg" class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[50%] shadow-md object-cover"/>
             </div>

             <div class="max-w-3xl  bg-white  mt-8">
                  <p class="text-gray-800 mb-4">
                     Kalau masih bingung, coba pertimbangkan hal-hal berikut:
                  </p>
                  <ul class="list-disc list-inside text-gray-700 space-y-2 leading-relaxed">
                     <li>
                        <span class="font-medium text-gray-900">Tujuan belajar –</span>
                        apakah untuk meningkatkan nilai harian, persiapan ujian masuk universitas, atau memperdalam mata pelajaran tertentu?
                     </li>
                     <li>
                        <span class="font-medium text-gray-900">Kebiasaan belajar –</span>
                        apakah kamu tipe mandiri atau perlu motivasi dari guru yang hadir langsung?
                     </li>
                     <li>
                        <span class="font-medium text-gray-900">Teknologi –</span>
                        apakah koneksi internet di rumah cukup stabil untuk mendukung kelas online?
                     </li>
                     <li>
                        <span class="font-medium text-gray-900">Kenyamanan keluarga –</span>
                        apakah orangtua lebih nyaman guru datang ke rumah atau cukup memantau dari jauh?
                     </li>
                  </ul>
                  <p class="mt-4 text-gray-800">
                     Jawaban dari pertanyaan-pertanyaan ini bisa jadi panduan sederhana sebelum memutuskan.
                  </p>
             </div>

             <!-- Section 7 -->
              <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-15 mb-6">
                 Kesimpulan
              </h2>

              <p class="text-justify mb-5">
                Les privat tatap muka dan online sama-sama punya kelebihan dan kekurangannya. Kalau kamu 
                tipe yang gampang terdistraksi dan butuh bimbingan intens, les privat tatap muka jelas 
                lebih cocok karena suasana lebih fokus dan komunikasi dengan guru lebih dekat. Tapi kalau 
                kamu lebih suka fleksibilitas, hemat waktu, dan sudah cukup mandiri, les privat online 
                bisa jadi pilihan tepat.
             </p>

             <p class="text-justify mb-5">
                Pada akhirnya, yang paling penting adalah konsistensi belajar. Mau tatap muka atau online, 
                kalau kamu serius, disiplin, dan punya guru yang tepat, hasil belajar pasti maksimal.
             </p>

             <p class="text-justify mb-5">
                Kalau kamu masih ragu menentukan pilihan, <a href="https://gabi.bimbelprivatjkt.com/" target="_blank"
                rel="noopener noreferrer" class="text-[#11B2F7] font-semibold hover:underline"> GABI Les Privat </a> bisa jadi 
                jawabannya. Dengan gratis trial 50.000 kamu bisa dapat guru berpengalaman, kurikulum 
                yang fleksibel, dan dua metode belajar (tatap muka atau online), kamu bebas memilih cara 
                belajar yang sesuai kebutuhanmu. Jadi, nggak ada lagi alasan malas belajar, karena dengan 
                GABI, belajar bisa lebih efektif, nyaman, dan menyenangkan.
             </p>

             



               





             


        </article>

    </section>

    <section>
        <Cta />
    </section>
  </AppLayout>
</template>

<script>
const message = "Halo MinBi! Saya mau tanya info mengenai les privat GABI. Bisa dibantu? 😊";

export default {
  name: "Artikel1",
  props: {
    whatsappLink: {
      type: String,
      default: `https://wa.me/6285712230349?text=${encodeURIComponent(message)}`,
    },
  },
};
</script>