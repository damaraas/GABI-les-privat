<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Cta from "../HomePage/Components/Cta.vue";

const judul = "Cara Membuat Jadwal Belajar Realistis & Konsisten";
</script>

<template>
    <AppLayout>
        <Head>
            <title>Cara Membuat Jadwal Belajar Realistis & Konsisten</title>
            <meta
                name="description"
                content="Temukan panduan lengkap cara membuat jadwal belajar yang realistis, konsisten, dan fleksibel agar progres belajarmu lebih terarah tanpa stres."
            />
            <meta
                name="keywords"
                content="Cara membuat jadwal belajar, Contoh jadwal belajar di rumah, jadwal belajar, jadwal belajar yang efektif"
            />
        </Head>

        <!-- Breadcrumb -->
        <section class="max-w-4xl mx-auto p-6">
            <nav class="text-sm mb-4">
                <a href="/blog" class="text-[#11B2F7] hover:underline"
                    >Beranda</a
                >
                <span class="mx-2">/</span>
                <span class="text-gray-600"
                    >Cara Membuat Jadwal Belajar Realistis & Konsisten</span
                >
            </nav>

            <!-- Hero -->
            <header class="mb-6">
                <h1 class="text-3xl font-bold leading-tight text-center">
                    {{ judul }}
                </h1>
                <!-- <p class="text-gray-600 mt-2">Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan.</p> -->
            </header>

            <!-- Gambar Artikel -->
            <div class="w-full flex justify-center my-6">
                <div class="flex flex-col items-center">
                    <img
                        src="../../../../public/img/artikel11/a1.webp"
                        alt="Para Siswa Sedang mengerjakan UTBK SNBT"
                        class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[50%] shadow-md object-cover"
                    />
                    <!-- <p class="text-sm text-gray-500 mt-2 italic text-center">
                        Sumber:
                        <a
                            href="https://id.pinterest.com/pin/60728294970052585/"
                            target="_blank"
                            class="underline hover:text-gray-700"
                        >
                            pinterest
                        </a>
                    </p> -->
                </div>
            </div>

            <!-- Bagian Artikel: UTBK SNBT (Seleksi Nasional Berdasarkan Tes) -->
            <!-- <div
                class="max-w-3xl mx-auto text-justify leading-relaxed text-gray-800 px-4 sm:px-6 md:px-0"
            >
                <p class="mb-4">
                    <strong
                        >UTBK SNBT (Seleksi Nasional Berdasarkan Tes)</strong
                    >
                    adalah salah satu momen paling menegangkan bagi para siswa
                    SMA yang bercita-cita masuk perguruan tinggi negeri favorit.
                    Setiap tahunnya, ratusan ribu peserta berjuang memperebutkan
                    kursi yang jumlahnya terbatas. Tantangannya bukan hanya soal
                    persaingan nih, tapi juga bagaimana mempersiapkan diri
                    secara efektif agar bisa meraih skor tinggi.
                </p>

                <p class="mb-4">
                    Banyak siswa merasa kesulitan karena materi UTBK SNBT
                    mencakup berbagai bidang, mulai dari
                    <em>Tes Potensi Skolastik (TPS)</em> yang menguji logika,
                    numerik, hingga pemahaman bacaan, sampai dengan
                    <em>Tes Literasi</em> dan <em>Penalaran Matematika</em>.
                    Belum lagi, waktu pengerjaan yang terbatas sering membuat
                    peserta panik dan kehilangan fokus. Jika tidak dipersiapkan
                    dengan strategi yang tepat, bukan hanya skor yang kurang
                    maksimal, tetapi juga peluang masuk kampus impian bisa
                    terlewat.
                </p>

                <p class="mb-4">
                    Selain itu, di era digital seperti sekarang, tantangan lain
                    yang tak kalah besar adalah distraksi dari gadget. Niatnya
                    belajar sebentar, eh malah berjam-jam scrolling media
                    sosial. Belum lagi tekanan dari orang tua atau lingkungan
                    yang membuat beban mental semakin besar. Hal-hal kecil ini
                    sering dianggap sepele, padahal bisa sangat berpengaruh
                    terhadap kualitas persiapan. Itulah kenapa, persiapan UTBK
                    tidak bisa hanya mengandalkan niat, tetapi juga membutuhkan
                    strategi belajar yang konsisten, terarah, dan disesuaikan
                    dengan kondisi setiap siswa.
                </p>

                <p class="mb-4">
                    Tapi jangan khawatir nih! Dengan metode belajar yang
                    terarah, disiplin, dan konsisten, kamu bisa lebih siap
                    menghadapi UTBK SNBT. MinBi akan membahas langkah-langkah
                    jitu yang bisa kamu lakukan untuk memaksimalkan persiapan
                    dan meningkatkan peluang lolos.
                </p>

                <p
                    class="mt-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-lg"
                >
                    Nah, buat kamu yang butuh pendamping belajar biar lebih
                    fokus dan terarah, bisa banget cek
                    <a
                        href="https://gabi.bimbelprivatjkt.com/"
                        target="_blank"
                        class="text-blue-600 font-semibold underline hover:text-blue-800 transition"
                    >
                        GABI Les Privat</a
                    >. Di sana ada program les privat UTBK SNBT dengan tutor
                    berpengalaman yang siap bantu kamu belajar sesuai target dan
                    gaya belajarmu. Belajar jadi lebih efektif, hasil pun lebih
                    maksimal!
                </p>
            </div> -->
        </section>
    </AppLayout>
</template>
