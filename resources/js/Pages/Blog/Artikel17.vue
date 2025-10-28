<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Cta from "../HomePage/Components/Cta.vue";
import { Fa6RegWindowMinimize } from "vue-icons-plus/fa6";

const judul =
  "Belajar Lebih Fokus Meski Attention Span Pendek Bersama Guru Privat Tatap Muka";
const phone = "6285712230349";
const message =
  "Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu? 😊";

// ✅ gunakan backtick agar string template berfungsi
const waLink = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>

<template>
  <AppLayout>
    <Head>
      <title>Belajar Lebih Fokus Meski Sulit Konsentrasi dengan Guru Privat</title>
      <meta
        name="description"
        content=" Attention span pendek bikin sulit fokus? Guru privat tatap muka GABI siap bantu. Baca artikel lengkapnya dan temukan solusinya."
      />
      <meta
        name="keywords"
        content="Belajar Lebih Fokus Meski Sulit Konsentrasi dengan Guru Privat"
      />
    </Head>

    <!-- Breadcrumb -->
    <section class="max-w-4xl mx-auto p-6">
      <nav class="text-sm mb-4">
        <a href="/blog" class="text-[#11B2F7] hover:underline">Beranda</a>
        <span class="mx-2">/</span>
        <span class="text-gray-600">{{ judul }}</span>
      </nav>

      <!-- Hero -->
      <header class="mb-6">
        <h1 class="text-3xl font-bold leading-tight text-center">
          Belajar Lebih Fokus Meski <span class="italic">Attention</span> Span Pendek
          Bersama Guru Privat Tatap Muka
        </h1>
      </header>

      <!-- Gambar Artikel -->
      <div class="w-full flex justify-center my-6">
        <div class="flex flex-col items-center">
          <img
            src="../../../../public/img/artikel17/a3.webp"
            alt="dukungan emosional tutor gabi kepada siswa"
            class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[80%] shadow-md object-cover"
          />
          <p class="text-sm text-black font-bold mt-2 italic text-center">
            Sumber:
            <a
              href="https://i.pinimg.com/736x/60/c6/62/60c66271793a869f45e3a00632db6462.jpg"
              target="_blank"
              class="underline hover:text-gray-700 font-medium text-gray-600"
            >
              https://i.pinimg.com/736x/60/c6/62/60c66271793a869f45e3a00632db6462.jpg
            </a>
          </p>
        </div>
      </div>

      <!-- Isi Artikel -->
      <article class="prose prose-lg">
        <section>
          <h2
            class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-10 mb-6"
          >
            <span class="italic"> Attention</span> Span Pendek, Tantangan Belajar di Era
            Digital
          </h2>
          <p class="mb-5 text-justify">
            Pernah merasa baru buka buku sebentar, eh tangan tiba-tiba gatel buka ponsel?
            Atau lagi ngerjain soal, baru lima menit, pikiran langsung melayang ke
            mana-mana. Fenomena ini sering banget dialami banyak siswa dan mahasiswa
            sekarang. Dalam dunia psikologi, hal itu dikenal dengan istilah attention
            span, alias rentang konsentrasi.
          </p>

          <p class="mb-5 text-justify">
            Masalahnya, rentang konsentrasi generasi sekarang cenderung makin pendek.
            Konten singkat, notifikasi tanpa henti, dan kebiasaan multitasking bikin otak
            lebih gampang terdistraksi. Padahal belajar butuh fokus. Tanpa fokus, materi
            yang sudah dibaca jadi lewat begitu aja, nggak benar-benar masuk ke memori
            jangka panjang.
          </p>
        </section>
      </article>

      <!-- Tantangan TOEFL -->
      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-10 mb-6"
      >
        Guru Privat Tatap Muka Bisa Jadi Jawaban
      </h2>

      <p class="mb-5 text-justify">
        Di tengah kebingungan menghadapi sulit fokus, banyak siswa menemukan solusi lewat
        guru privat tatap muka. Berbeda dengan belajar online yang kadang rawan distraksi,
        belajar langsung dengan tutor menghadirkan suasana lebih hidup. Ada interaksi, ada
        kontak mata, dan ada rasa kehadiran yang bikin siswa merasa “dipantau” sehingga
        fokus terjaga lebih lama.
      </p>
      <p class="mb-5 text-justify">
        Buat orang tua, ini juga memberikan rasa tenang. Mereka bisa melihat perkembangan
        anak secara nyata karena guru datang langsung ke rumah. Sementara untuk mahasiswa
        atau pelajar, belajar tatap muka membantu menjaga ritme belajar lebih konsisten.
      </p>

      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-10 mb-6"
      >
        Cara Agar Fokus Belajar Lebih Panjang
      </h2>

      <p class="mb-2">
        Mungkin ada yang mikir, “Ya kalau udah dasarnya sulit fokus, gimana bisa bertahan
        lama belajar?” Tenang, ada beberapa trik sederhana yang bisa dijalani supaya
        konsentrasi lebih awet :
      </p>
      <ul class="list-disc pl-6 space-y-1 text-gray-700 text-justify mb-2">
        <li>
          Atur lingkungan belajar. Hindari belajar di tempat yang penuh distraksi. Meja
          rapi, cahaya cukup, dan jauhkan gadget yang nggak diperlukan
        </li>
        <li>
          Gunakan teknik jeda singkat. Fokus 25 menit, istirahat 5 menit. Metode ini
          sering disebut Pomodoro Technique. Efektif banget buat mengurangi rasa bosan.
        </li>
        <li>
          Belajar dengan guru privat tatap muka. Ketika ada tutor yang mendampingi,
          konsentrasi lebih mudah dijaga. Ada stimulus eksternal yang bikin otak tetap
          engaged.
        </li>
        <li>
          Tetapkan target kecil. Daripada memaksa hafal satu bab sekaligus, coba pecah
          jadi poin-poin kecil. Setiap kali target tercapai, muncul rasa puas yang bikin
          semangat lanjut.
        </li>
      </ul>

      <!-- Bagian Trik Listening -->
      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-black tracking-wide leading-tight mt-10 mb-6"
      >
        Interaksi Personal Membuat Materi Lebih Nempel
      </h2>

      <p class="mb-5 text-justify">
        Bedanya belajar tatap muka dibanding kelas besar adalah interaksi personal. Setiap
        anak punya gaya belajar berbeda. Ada yang lebih cepat memahami lewat diskusi, ada
        yang butuh contoh visual, ada juga yang baru paham setelah latihan soal berulang.
      </p>

      <p class="mb-5 text-justify">
        Guru privat tatap muka bisa langsung mengidentifikasi kebutuhan unik tiap siswa.
        Misalnya, kalau ada siswa yang gampang bosan, tutor bisa menyelipkan kuis singkat
        atau latihan praktis supaya suasana nggak monoton. Kalau ada siswa yang lebih
        nyaman dengan penjelasan detail, tutor bisa memperlambat tempo dan memberi analogi
        yang relate.
      </p>

      <p>
        🔗 Baca juga:
        <a
          href="https://gabi.bimbelprivatjkt.com/"
          class="underline text-blue-500 hover:text-blue-700 duration-300"
        >
          Biaya Les Privat
        </a>
      </p>

      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-black -wide leading-tight mt-10 mb-6"
      >
        Mengatasi Rasa Malas dan Prokrastinasi
      </h2>

      <p class="mb-4 text-justify">
        Salah satu alasan siswa merasa sulit fokus adalah karena rasa malas yang
        ujung-ujungnya jadi prokrastinasi. Niatnya mau belajar sebentar, tapi malah
        ditunda sampai akhirnya menumpuk. Nah, kehadiran guru privat tatap muka bisa
        memotong siklus ini.
      </p>
      <p class="mb-4 text-justify">
        Ada komitmen waktu yang jelas. Misalnya, setiap Selasa dan Kamis jam 4 sore tutor
        datang. Dengan begitu, otak sudah otomatis menyiapkan diri. Efeknya, kemungkinan
        menunda jauh lebih kecil.
      </p>

      <div class="w-full flex justify-center my-6">
        <div class="flex flex-col items-center">
          <img
            src="../../../../public/img/artikel17/a2.webp"
            alt="dukungan emosional tutor gabi kepada siswa"
            class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[80%] shadow-md object-cover"
          />
          <p class="text-sm text-black font-bold mt-2 italic text-center">
            Sumber:
            <a
              href="https://i.pinimg.com/736x/e5/aa/93/e5aa93a58d8c1dbf23b623143c249fa3.jpg"
              target="_blank"
              class="underline hover:text-gray-700 font-medium text-gray-600"
            >
              https://i.pinimg.com/736x/e5/aa/93/e5aa93a58d8c1dbf23b623143c249fa3.jpg
            </a>
          </p>
        </div>
      </div>
      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-bold tracking-wide leading-tight mt-15 mb-6"
      >
        Dukungan Emosional yang Sering Terlupakan
      </h2>

      <p class="mb-5 text-justify">
        Banyak yang mengira belajar itu hanya soal materi. Padahal, faktor emosional juga
        punya pengaruh besar. Rasa minder, takut gagal, atau cemas menghadapi ujian bisa
        bikin fokus buyar.
      </p>
      <p class="mb-5 text-justify">
        Guru privat tatap muka bukan sekadar pengajar, tapi juga bisa menjadi pendamping
        emosional. Tutor yang sabar dan suportif bisa bikin siswa lebih percaya diri.
        Ketika ada perasaan positif dalam belajar, konsentrasi otomatis jadi lebih stabil.
      </p>

      <div class="w-full flex justify-center my-6">
        <div class="flex flex-col items-center">
          <img
            src="../../../../public/img/artikel17/a2.webp"
            alt="dukungan emosional tutor gabi kepada siswa"
            class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[60%] shadow-md object-cover"
          />
        </div>
      </div>

      <p>
        🔗 Baca juga:
        <a
          href="https://bimbelprivatjkt.com/bimbel-privat-metode-belajar-yang-efektif-untuk-anak/"
          class="underline text-blue-500 hover:text-blue-700 duration-300"
        >
          Panduan Orang Tua Memilih Kursus Privat Online Terbaik untuk Anak
        </a>
      </p>
      <!-- Paragraf Pembuka -->

      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-bold tracking-wide leading-tight mt-15 mb-6"
      >
        Belajar Jadi Lebih Menyenangkan
      </h2>

      <p class="mb-5 text-justify">
        Coba bayangkan, belajar tanpa tekanan, ditemani guru yang ngerti cara ngajarin
        sesuai kebutuhanmu, dan suasananya juga nyaman. Bukannya jadi beban, sesi belajar
        bisa berubah jadi momen produktif yang malah ditunggu-tunggu.
      </p>

      <p class="mb-5 text-justify">
        Banyak siswa yang awalnya gampang terdistraksi, setelah terbiasa dengan pola
        belajar privat malah bisa duduk fokus lebih lama. Bukan karena dipaksa, tapi
        karena belajar terasa relevan dan menyenangkan.
      </p>

      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-bold tracking-wide leading-tight mt-15 mb-6"
      >
        Peran Orang Tua dalam Menjaga Konsentrasi Anak
      </h2>

      <p class="mb-5 text-justify">
        Untuk orang tua Gen Z yang kini punya anak dari kalangan Gen Alpha, mendukung anak
        agar bisa fokus itu bukan hal sepele. Bukan cuma soal menyediakan guru privat
        tatap muka, tapi juga menciptakan rutinitas sehat di rumah.
      </p>

      <p class="mb-5 text-justify">
        Memberikan waktu istirahat cukup, membatasi screen time berlebihan, dan memberi
        ruang diskusi terbuka bisa membuat anak lebih siap menerima pelajaran. Ketika
        rumah dan guru privat saling mendukung, hasil belajar jadi lebih maksimal.
      </p>

      <p>
        🔗 Baca juga:
        <a
          href="https://bimbelprivatjkt.com/bimbel-privat-metode-belajar-yang-efektif-untuk-anak/"
          class="underline text-blue-500 hover:text-blue-700 duration-300"
        >
          8 Peran Orang Tua dalam Mendukung Proses Bimbel Privat
        </a>
      </p>

      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-bold tracking-wide leading-tight mt-15 mb-6"
      >
        Saatnya Beralih ke Cara Belajar yang Lebih Personal
      </h2>

      <p class="mb-5 text-justify">
        Perubahan pola hidup di era digital membuat metode belajar tradisional saja kadang
        kurang efektif. Siswa butuh pendekatan yang lebih personal. Guru privat tatap muka
        hadir untuk menjawab kebutuhan itu.
      </p>

      <p class="mb-5 text-justify">
        Dengan pendampingan langsung, konsentrasi bisa lebih terjaga. Dengan perhatian
        personal, motivasi belajar bisa meningkat. Dan dengan dukungan emosional, siswa
        lebih berani menghadapi tantangan akademik.
      </p>

      <h2
        class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-bold tracking-wide leading-tight mt-15 mb-6"
      >
        Kesimpulan
      </h2>

      <p class="mb-5 text-justify">
        <span class="italic">Attention</span> span yang pendek memang jadi tantangan besar
        buat generasi sekarang. Tapi itu bukan alasan untuk menyerah. Ada banyak cara agar
        fokus belajar bisa lebih panjang, salah satunya lewat pendampingan guru privat
        tatap muka.
      </p>

      <p class="mb-5 text-justify">
        Kalau kamu atau anakmu merasa sering sulit fokus, ini saat yang tepat untuk
        mencoba belajar bareng <strong>GABI</strong>. Tutor berpengalaman akan membantu
        menemukan pola belajar yang sesuai, menciptakan suasana belajar yang nyaman, dan
        menjaga konsentrasi tetap stabil.
      </p>

      <p class="mb-5 text-justify">
        Yuk, jangan tunggu sampai kesulitan menumpuk. Langsung hubungi MinBi lewat
        WhatsApp +62 857-1223-0349 untuk konsultasi kebutuhan belajarmu. Informasi lengkap
        bisa kamu lihat juga di
        <a href=" https://gabi.bimbelprivatjkt.com/" class="font-bold text-primary"
          >Gabi Les Privat</a
        >
      </p>
    </section>

    <section>
      <Cta />
    </section>
  </AppLayout>
</template>
