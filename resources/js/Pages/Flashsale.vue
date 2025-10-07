<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { Head } from '@inertiajs/vue3'
import { SiWhatsapp } from "vue-icons-plus/si";

const phone = "6285712230349";
const message = "Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu? 😊";
const waLink = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
</script>

<template>
    <AppLayout>
        <Head title="Flash Sale GABI Les Privat" />

        <!-- Section 1 -->
        <section>
            <div class="container m-auto px-10 font-onest mb-20">
                <div class="flex flex-col-reverse lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="w-full lg:w-1/2 m-10">
                        <div class="font-extrabold">
                            <h1 class="text-5xl">
                                Flash Sale GABI Les Privat – Hemat Besar, Kuota Terbatas!
                            </h1>
                            <h2 class="text-3xl mt-4 mr-8 italic bg-secondary p-2 rounded-xl">
                                Belajar Lebih Cerdas, Biaya Lebih Hemat
                            </h2>
                            <h1 class="text-4xl mt-4 text-[#085CD2]">
                                BELAJAR LEBIH CERDAS TANPA BIKIN KANTONG JEBOL
                            </h1>
                            <h2 class="text-3xl mt-4">
                                Kini Ada Solusi Program
                            </h2>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 m-10">
                        <div>
                            <img src="../../../public/img/flashsale/flashsale.webp" alt="Flash Sale" class="rounded-2xl" width="800">
                            <h2 class="font-extrabold text-3xl italic mt-4 ml-2">
                                Dengan Potongan Harga Spesial Untuk Les Privat Bersama Guru Berpengalaman
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section class="relative">
            <div class="container m-auto px-10 font-onest">
                <div class="flex flex-col-reverse lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="w-full lg:w-1/2 m-10">
                        <div class="font-extrabold text-4xl">
                            <h1 class="text-[#085CD2] text-5xl">
                                Flash Sale GABI Les Privat – <br> Kuota Terbatas!!!
                            </h1>
                            <h1 class="mt-4">
                                Inilah yang paling ditunggu
                            </h1>
                            <h1 class="mt-4 text-red-500">
                                Flash Sale GABI!!!!
                            </h1>
                            <h1 class="text-3xl mt-4 bg-[#085CD2] font-light py-1 px-4 mr-36 text-white">
                                “Flash Sale 50% untuk 10 <br> pendaftar pertama minggu ini.”
                            </h1>
                            <h1 class="mt-4 text-red-500">
                                SIAPA CEPAT, DIA DAPATTTTT
                            </h1>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 mt-10 flex justify-end overflow-visible">
                        <div class="relative translate-x-10">
                            <img src="../../../public/img/flashsale/megafon.webp" alt="Mascot">
                        </div>
                    </div>
                </div>
            </div>

            <a :href="waLink" target="_blank" rel="noopener noreferrer" class="absolute left-1/2 bottom-15 -translate-x-1/6 z-20">
                <button class="bg-green text-white text-2xl font-light hover:!bg-green-600 py-3 px-4 rounded-xl duration-300 flex items-center gap-2">
                    Daftar Sekarang
                    <SiWhatsapp class="w-6 h-6"></SiWhatsapp>
                 </button>
            </a>
        </section>

        <!-- Section 3 -->
        <section class="bg-primary py-20">
            <div class="container m-auto px-10 font-onest">
                <div class="flex flex-col-reverse lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="w-full lg:w-1/2 flex justify-start overflow-visible">
                        <div class="relative -translate-x-10">
                            <img src="../../../public/img/flashsale/tutorSiswa.webp" alt="Tutor dan Siswa" width="600">
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 m-10 ml-0 relative">
                        <h1 class="text-secondary font-extrabold text-5xl">
                            Kenapa Flash Sale GABI Menguntungkan?
                        </h1>
                        <div class="bg-white rounded-2xl px-12 py-6 mt-4">
                            <div class="font-medium text-2xl">
                            <li>
                                Hemat besar dibandingkan harga normal.
                            </li>
                            <li>
                                Akses guru berkualitas dengan biaya lebih ringan. 
                            </li>
                            <li>
                                Cocok untuk mencoba dulu sebelum lanjut ke paket reguler.
                            </li>
                            <li>
                                Medorong motivasi anak karena bisa segera mulai belajar dengan guru yag tepat.
                            </li>
                            </div>
                        </div>
                        <div class="absolute right-1 -bottom-15 translate-x-1/2 z-20">
                            <img src="../../../public/img/flashsale/senyum.webp" alt="Mascot GABI" width="165">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="bg-primary pt-10 pb-20">
            <div class="container m-auto px-42 font-onest mb-20">
                <div class="w-full m-10 ml-0 relative">
                    <h1 class="text-secondary font-extrabold text-5xl text-center">
                        Mengapa Memilih Les Privat GABI saat Flash Sale?
                    </h1>
                    <h3 class="text-3xl font-medium text-center italic my-4 mx-48">
                        Selain potongan harga yang menarik, ada banyak alasan kenapa program ini patut dipilih:
                    </h3>
                    <div class="bg-white rounded-2xl px-12 py-8 mt-4">
                        <div class="font-medium text-3xl">
                        <li class="my-1">
                            Guru profesional dan ramah → anak bisa nyaman sejak pertemuan pertama.
                        </li>
                        <li class="my-1">
                            Materi fleksibel → bisa fokus pada pelajaran sekolah, ujian, atau pengembangan skill.
                        </li>
                        <li class="my-1">
                            Belajar lebih efektif → satu guru fokus pada satu anak, hasilnya lebih cepat terlihat.
                        </li>
                        <li class="my-1">
                            Trial + diskon + flash sale → kombinasi hemat maksimal untuk orang tua.
                        </li>
                        </div>
                    </div>
                    <div class="absolute right-1 -bottom-15 translate-x-1/2 z-20">
                        <img src="../../../public/img/flashsale/senyum.webp" alt="Mascot GABI" width="180">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="bg-secondary">
            <div class="container m-auto px-10 font-onest">
                <div class="flex flex-col-reverse lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="text-left font-extrabold">
                    <h2 class="italic text-5xl">
                        Jangan Lewatkan Kesempatan ini!
                    </h2>
                    <h2 class="bg-white p-2 text-[#085CD2] text-4xl mt-4 mr-89">
                        Daftar sekarang, sebelum slot habis!
                    </h2>
                    <h3 class="font-medium text-4xl mt-4 mr-46">
                        Dengan guru berpengalaman & harga hemat, GABI jadi pilihan terbaik untuk anak anda.
                    </h3>
                    <a :href="waLink" target="_blank" rel="noopener noreferrer">
                        <button class="bg-green text-white text-2xl font-light hover:!bg-green-600 py-3 px-4 rounded-xl duration-300 flex items-center gap-2 mt-4">
                            Daftar Sekarang
                            <SiWhatsapp class="w-6 h-6"></SiWhatsapp>
                        </button>
                    </a>
                </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 flex justify-end overflow-visible">
                        <div class="relative translate-x-10">
                            <img src="../../../public/img/flashsale/senyumBG.webp" alt="Mascot">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>