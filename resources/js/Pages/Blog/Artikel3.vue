<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Cta from "../HomePage/Components/Cta.vue";
import { Fa6RegWindowMinimize } from "vue-icons-plus/fa6";

const judul =
    "Trik Cepat Kuasai Ujian TOEFL Listening, Reading, dan Writing";
const phone = "6285712230349";
const message =
    "Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu? 😊";

// ✅ gunakan backtick agar string template berfungsi
const waLink = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>

<template>
    <AppLayout>
        <Head>
            <title>
                Trik Cepat Kuasai Ujian TOEFL Listening, Reading, dan Writing
            </title>
            <meta
                name="description"
                content="Pelajari trik cepat dan efektif menghadapi ujian TOEFL. Kuasai skill Listening, Reading, dan Writing dengan strategi belajar yang terbukti sukses!"
            />
            <meta
                name="keywords"
                content="Trik Cepat Kuasai Ujian TOEFL Listening, Reading, dan Writing"
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
                    {{ judul }}
                </h1>
            </header>

            <!-- Gambar Artikel -->
            <div class="w-full flex justify-center my-6">
                <div class="flex flex-col items-center">
                    <img
                        src="../../../../public/img/artikel3/a2.webp"
                        alt="Ilustrasi Anak Sedang Belajar dengan Orang Dewasa"
                        class="w-[85%] sm:w-[70%] md:w-[60%] lg:w-[60%] shadow-md object-cover"
                    />
                    <p class="text-sm text-black font-bold mt-2 italic text-center">
                        Sumber:
                        <a
                            href="https://id.pinterest.com/pin/589971619965638912/"
                            target="_blank"
                            class="underline hover:text-gray-700 font-medium text-gray-600"
                        >
                            https://id.pinterest.com/pin/589971619965638912/
                        </a>
                    </p>
                </div>
            </div>

            <!-- Isi Artikel -->
            <article class="prose prose-lg">
                <section>
                    <p class="mb-5 text-justify">
                        Ujian TOEFL adalah salah satu syarat penting bagi siapa
                        pun yang ingin melanjutkan studi ke luar negeri,
                        mendapatkan beasiswa, atau bahkan syarat lulus untuk
                        beberapa perguruan tinggi di Indonesia. Nilai TOEFL
                        yang tinggi bisa menjadi tiket emas menuju peluang yang
                        lebih luas.
                    </p>

                    <p class="mb-5 text-justify">
                        Tapi kenyataannya, banyak peserta ujian merasa kewalahan
                        saat berhadapan dengan soal-soal TOEFL, terutama pada
                        bagian listening, reading, dan writing. Listening terasa
                        cepat dan sulit ditangkap, reading penuh dengan teks
                        panjang yang kompleks, sedangkan writing menguji
                        kemampuan menuangkan ide dalam bahasa Inggris secara
                        runtut.
                    </p>

                    <p class="mb-4 text-justify">
                        Bayangkan saja, kamu duduk di ruang ujian dengan headset
                        terpasang, lalu mendengarkan percakapan panjang antara
                        dua atau lebih orang asing. Kamu harus menangkap ide
                        utama sekaligus detail-detail kecil, padahal audio hanya
                        diputar sekali. Begitu masuk ke reading, teks yang
                        muncul bisa panjangnya lebih dari dua halaman, penuh
                        dengan kosakata formal dan akademik yang jarang dipakai
                        sehari-hari. Lalu saat writing, waktu yang terbatas
                        membuatmu harus menulis cepat, tapi tetap jelas dan
                        rapi. Tidak heran banyak orang merasa stres.
                    </p>

                    <h2 class="font-semibold">Belajar TOEFL nggak harus tegang!</h2>
                    <p class="mb-5 text-justify mt-4">
                        Di
                        <a
                            href="/"
                            target="_blank"
                            class="text-primary font-bold hover:underline"
                        >
                            Gabi Les Privat
                        </a>,
                        kamu bisa latihan
                        <strong>Listening, Reading, Writing, dan Speaking</strong>
                        dengan cara yang interaktif dan menyenangkan.
                    </p>

                    <p class="mb-5 text-justify mt-4">
                        Tutor berpengalaman siap bantu kamu pahami strategi
                        ujian TOEFL tanpa tekanan, tapi tetap fokus mencapai
                        skor tinggi. Dengan pendekatan personal, belajar jadi
                        lebih efektif dan bikin kamu percaya diri saat
                        menghadapi tes. Bersama GABI,
                        <strong>persiapan TOEFL jadi seru, ringan, dan hasilnya nyata.</strong>
                    </p>

                    <p>
                        🔗 Baca juga:
                        <a
                            href="https://gabi.bimbelprivatjkt.com/promo"
                            class="underline text-blue-500 hover:text-blue-700 duration-300"
                        >
                            Promo Gabi Les Privat
                        </a>
                    </p>
                </section>
            </article>

            <!-- Tantangan TOEFL -->
            <h2
                class="text-xl sm:text-2xl lg:text-3xl font-bold text-center tracking-wide leading-tight mt-10 mb-6"
            >
                Tantangan Dalam Ujian TOEFL
            </h2>

            <p class="text-gray-700 leading-relaxed mb-6 text-justify">
                Sebelum masuk ke strategi, mari pahami dulu tantangan yang sering bikin peserta kesulitan:
            </p>

            <ul class="list-outside pl-6 space-y-3 text-gray-700 text-justify">
                <li class="flex items-start gap-2">
                    <Fa6RegWindowMinimize class="w-4 h-4 mt-1 text-gray-800" />
                    <span>
                        <strong>Listening:</strong> audio hanya diputar sekali, jadi konsentrasi penuh sangat dibutuhkan.
                    </span>
                </li>
                <li class="flex items-start gap-2">
                    <Fa6RegWindowMinimize class="w-4 h-4 mt-1 text-gray-800" />
                    <span>
                        <strong>Reading:</strong> teks panjang dengan kosakata akademik bisa bikin kamu pusing kalau tidak terbiasa membaca.
                    </span>
                </li>
                <li class="flex items-start gap-2">
                    <Fa6RegWindowMinimize class="w-4 h-4 mt-1 text-gray-800" />
                    <span>
                        <strong>Writing:</strong> butuh kemampuan menulis argumen yang jelas, dengan tata bahasa yang rapi dalam waktu terbatas.
                    </span>
                </li>
            </ul>

            <p class="mb-5 mt-4 text-justify">
                Kalau kamu tidak punya trik belajar yang efektif, sering kali waktu habis sebelum jawaban selesai.
            </p>

            <p>
                🔗 Baca juga:
                <a
                    href="https://bimbelprivatjkt.com/tips-memilih-les-privat-berkualitas/"
                    class="underline text-blue-500 hover:text-blue-700 duration-300"
                >
                    Tips Memilih Les Privat
                </a>
            </p>

            <!-- Bagian Trik Listening -->
            <h2
                class="text-xl sm:text-2xl lg:text-3xl font-semibold text-center text-black tracking-wide leading-tight mt-10 mb-6"
            >
                Trik Listening TOEFL
            </h2>

            <!-- ... (lanjutan isi artikel sama seperti punyamu, tidak dihapus) ... -->

            <!-- CTA -->
            <section>
                <Cta />
            </section>
        </section>
    </AppLayout>
</template>
