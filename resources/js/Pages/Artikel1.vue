<!-- hubungkan ke route ini http://127.0.0.1:8000/artikel1/metode-membaca-efisien-agar-tidak-cepat-bosan -->

<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";

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
    <Head title="Cara Membaca Efisien untuk Anak SMA agar Tidak Cepat Bosan" />

    <!-- Breadcrumb -->
    <section class="max-w-4xl mx-auto p-6">
      <nav class="text-sm mb-4">
        <a href="/" class="text-[#11B2F7] hover:underline">Beranda</a>
        <span class="mx-2">/</span>
        <span class="text-gray-600">Artikel</span>
      </nav>

      <!-- Hero -->
      <header class="mb-6">
        <h1 class="text-3xl font-bold leading-tight">{{ judul }}</h1>
        <p class="text-gray-600 mt-2">
          Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan.
        </p>
        <!-- <p class="mt-4 text-sm text-gray-500">Slug: {{ slug }}</p> -->
      </header>
    
        <!-- Judul Artikel Bagian Pertama-->
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-[#FDD636]
                tracking-wide leading-tight mt-8 mb-6">
        Metode Membaca Efisien agar Tidak Cepat Bosan
        </h2>

        <!-- Gambar Artikel -->
        <div class="w-full flex justify-center my-6">
        <img 
            src="../../../public/img/artikel1/a1.webp" 
            alt="Ilustrasi Membaca Efisien"
            class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[50%] shadow-md object-cover"
        />
        </div>

        <!-- Kutipan -->
        <blockquote class="border-l-4 border-[#11B2F7] pl-4 italic text-gray-700 mb-6 text-xl md:text-xl">
        “Buku adalah jendela ilmu, tapi apa jadinya kalau kita cepat bosan membuka jendela itu?”
        </blockquote>

      <!-- Isi Artikel Bagian Pertama -->
      <article class="prose prose-lg">
        <section>
          <p class="mb-5 text-justify sm:text-left">
            Hayoo, siapa di sini yang masih malas membaca? Merujuk dari quotes di atas, seharusnya bisa 
            memotivasi kamu untuk lebih giat membaca. Faktanya, banyak orang sebenarnya punya niat 
            membaca, tapi sulit bertahan lebih dari beberapa halaman. Apalagi di era sekarang, ketika 
            notifikasi handphone terasa lebih menarik daripada baris-baris tulisan.
          </p>
          <p class="mb-5 text-justify sm:text-left">
            Padahal, membaca adalah kunci utama untuk memahami pelajaran, menguasai materi ujian, bahkan 
            persiapan masuk perguruan tinggi untuk anak SMA. Kalau kamu sebagai siswa sudah terbiasa 
            dengan cara membaca efisien, kamu akan lebih mudah mengatur waktu belajar, tidak gampang 
            bosan, dan tentu saja bisa mendapatkan hasil belajar yang lebih baik.
          </p>
          <p class="mb-5 text-justify sm:text-left">
            Padahal, membaca adalah kunci utama untuk memahami pelajaran, menguasai materi ujian, bahkan 
            persiapan masuk perguruan tinggi untuk anak SMA. Kalau kamu sebagai siswa sudah terbiasa 
            dengan cara membaca efisien, kamu akan lebih mudah mengatur waktu belajar, tidak gampang 
            bosan, dan tentu saja bisa mendapatkan hasil belajar yang lebih baik.
          </p>
        </section>
      </article>

        <!-- Judul Artikel Bagian Kedua-->
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-[#FDD636]
                tracking-wide leading-tight mt-15 mb-6">
        Tantangan Membaca di Era Digital
        </h2>

         <!-- Isi Artikel Bagian Kedua -->
        <article class="prose prose-lg">
            <section>
            <p class="mb-5 text-justify sm:text-left">
                Kita hidup di zaman ketika informasi berlimpah, tapi konsentrasi justru makin terbagi. 
                Gadget dan media sosial menjadi distraksi utama, membuat membaca satu bab buku saja 
                terasa berat apalagi baca satu buku yang tebalnya ratusan halaman kan… 
            </p>
            <p class="mb-5 text-justify sm:text-left">
                Selain itu, budaya serba instan membuat kita terbiasa dengan sesuatu yang cepat selesai. 
                Reels Instagram atau bahkan Video TikTok pasti lebih menarik daripada membaca buku yang 
                tebal, sehingga duduk berjam-jam bersama buku terasa membosankan.
            </p>
            <p class="mb-5 text-justify sm:text-left">
                Bagi pelajar atau mahasiswa, membaca bukan hanya soal hobi, tapi juga kebutuhan akademik. 
                Hampir setiap hari kamu harus berhadapan dengan buku pelajaran yang tebal, rangkuman 
                materi, apalagi untuk anak SMA bacaan tambahan untuk persiapan ujian juga banyak kan. 
                Tidak jarang, semangat belajar kamu juga  jadi turun karena merasa cepat lelah membaca.
            </p>
            </section>
        </article>


        <!-- Judul Artikel Bagian Ketiga-->
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-[#FDD636]
                tracking-wide leading-tight mt-15 mb-6">
        Kenapa Banyak Orang Cepat Bosan Membaca
        </h2>

        <!-- Paragraf Pembuka -->
        <p class="text-gray-700 leading-relaxed mb-6">
        Ada beberapa alasan umum nih kenapa banyak siswa mudah bosan ketika membaca:
        </p>

        <!-- Daftar Penyebab -->
        <ul class="list-disc pl-6 space-y-3 text-gray-700">
        <li>
            <span class="font-semibold text-[#11B2F7]">Terlalu fokus pada jumlah halaman</span> – melihat tebalnya buku mungkin sering bikin mental down sebelum mulai.
        </li>
        <li>
            <span class="font-semibold text-[#11B2F7]">Bacaan tidak sesuai minat</span> – membaca sesuatu yang terasa asing atau terlalu rumit membuat otak cepat lelah.
        </li>
        <li>
            <span class="font-semibold text-[#11B2F7]">Tidak punya strategi membaca</span> – banyak orang masih membaca kata per kata, sehingga butuh waktu lama untuk memahami.
        </li>
        </ul>

        <!-- Paragraf Penutup -->
        <p class="text-gray-700 leading-relaxed mt-6">
        Padahal, kalau pakai metode yang benar, membaca bisa menjadi lebih ringan dan menyenangkan.
        </p>


        <!-- Judul Artikel Bagian Keempat-->
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-[#FDD636]
                tracking-wide leading-tight mt-15 mb-6">
        Metode Membaca Efisien
        </h2>

        <!-- Paragraf Pembuka -->
        <p class="text-gray-700 leading-relaxed mb-6">
        Supaya membaca tidak lagi terasa berat, ada beberapa metode yang bisa kamu coba:
        </p>

        <!-- Daftar Metode Membaca Efisien -->
        <ul class="list-disc pl-6 space-y-6 text-gray-700">
        <li>
            <span class="font-semibold text-[#11B2F7] block mb-1">
            Teknik Skimming dan Scanning
            </span>
            <span class="block">
            Gunakan skimming untuk mencari ide utama dalam bacaan, lalu scanning untuk menemukan detail yang penting. 
            Cara ini membuatmu lebih cepat menangkap inti tanpa harus membaca semua kata.
            </span>
        </li>

        <li>
            <span class="font-semibold text-[#11B2F7] block mb-1">
            Membagi Bacaan Jadi Potongan Kecil (Chunking)
            </span>
            <span class="block">
            Jangan memaksa membaca 30 halaman sekaligus. Pecah bacaan menjadi bagian kecil, misalnya 5 halaman per sesi, 
            lalu beri jeda singkat.
            </span>
        </li>

        <li>
            <span class="font-semibold text-[#11B2F7] block mb-1">
            Membuat Catatan Singkat atau Mind Map
            </span>
            <span class="block">
            Dengan mencatat poin penting atau membuat mind map, otak lebih mudah mengingat isi bacaan. 
            Catatan ini juga berguna ketika mengulang materi sebelum ujian.
            </span>
        </li>

        <li>
            <span class="font-semibold text-[#11B2F7] block mb-1">
            Atur Waktu Membaca dengan Pomodoro Technique
            </span>
            <span class="block">
            Cobalah membaca selama 25 menit, lalu istirahat 5 menit. Metode ini terbukti menjaga fokus lebih lama tanpa merasa terbebani.
            </span>
        </li>
        </ul>


        <!-- Judul Artikel Bagian Kelima-->
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-[#FDD636]
                tracking-wide leading-tight mt-15 mb-6">
        Menemukan Gaya Membaca yang Cocok
        </h2>

        <!-- Gambar Artikel -->
        <div class="w-full flex justify-center my-6">
        <img 
            src="../../../public/img/artikel1/a2.webp" 
            alt="Ilustrasi Membaca Efisien"
            class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[50%] shadow-md object-cover"
        />
        </div>

        <!-- Paragraf Pembuka -->
        <p class="text-gray-700 leading-relaxed mb-6">
        Mungkin setiap orang punya gaya belajar yang berbeda, begitu juga gaya membaca. 
        Beberapa tips berikut bisa membantu kamu:
        </p>

        <!-- Daftar Tips Membaca -->
        <ul class="list-disc pl-6 space-y-3 text-gray-700">
        <li>
            <span class="block">
            <span class="font-semibold text-[#11B2F7]">Mulai dari bacaan ringan sesuai minat</span> 
            sebelum beralih ke buku yang lebih kompleks.
            </span>
        </li>

        <li>
            <span class="block">
            <span class="font-semibold text-[#11B2F7]">Gunakan variasi format</span> 
            seperti audiobook atau e-book agar tidak monoton.
            </span>
        </li>

        <li>
            <span class="block">
            <span class="font-semibold text-[#11B2F7]">Ciptakan suasana nyaman:</span> 
            pencahayaan cukup, posisi duduk yang benar, dan musik lembut bisa meningkatkan fokus.
            </span>
        </li>

        <li>
            <span class="block">
            <span class="font-semibold text-[#11B2F7]">Jangan ragu meminta bantuan:</span> 
            kadang, kita butuh orang lain untuk membantu memahami bacaan yang sulit.
            </span>
        </li>
        </ul>


        <!-- Judul Artikel Bagian Keenam-->
        <h2 class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-[#FDD636]
                tracking-wide leading-tight mt-15 mb-6">
        Kesimpulan
        </h2>
         <!-- Isi Artikel Bagian Keenam -->
        <section class="mt-8">
        <p class="text-gray-700 leading-relaxed mb-4 text-justify sm:text-left">
            Membaca adalah keterampilan penting untuk siswa terutama siswa SMA, karena hampir semua mata pelajaran membutuhkan pemahaman dari buku dan teks panjang. 
            Sayangnya, banyak siswa cepat merasa bosan. Tapi, dengan menerapkan <span class="font-semibold text-[#11B2F7]">cara membaca efisien</span> 
            seperti skimming, scanning, chunking, membuat catatan, hingga Pomodoro Technique, belajar bisa terasa lebih ringan dan terarah.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify sm:text-left">
            Ingat, tujuan membaca bukan hanya menyelesaikan halaman, melainkan memahami isi pelajaran. 
            Kalau kamu masih kesulitan, jangan menyerah. Mulailah dengan trik membaca sederhana lalu kembangkan sedikit demi sedikit.
        </p>

        <p class="text-gray-700 leading-relaxed mb-4 text-justify sm:text-left">
            Strategi membaca buku pelajaran yang tepat akan sangat membantu dalam menghadapi ujian harian, ujian semester, hingga persiapan masuk perguruan tinggi. 
            Dengan teknik membaca cepat dan efisien, kamu bisa menghemat waktu, menjaga fokus, dan tetap termotivasi.
        </p>

        <p class="text-gray-700 leading-relaxed mb-6 text-justify sm:text-left">
            Kalau membaca sendiri masih terasa berat, coba pertimbangkan belajar bersama guru privat. 
            Kadang, bimbingan kecil bisa membuat pemahaman lebih mudah. 
            Nah, kamu bisa mencoba layanan 
            <a href="/" target="_blank" rel="noopener noreferrer" class="text-[#11B2F7] font-medium hover:underline">
            GABI Les Privat untuk Anak SD–SMA
            </a>. 
            Dengan biaya trial hanya <span class="font-semibold">Rp50.000</span>, kamu bisa merasakan belajar lebih fokus karena dibimbing, 
            mendapatkan tips membaca yang sesuai kebutuhanmu, dan juga meningkatkan hasil akademik.
        </p>
        </section> 
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
