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
            <div class="container m-auto px-10 font-onest lg:mb-20 md:mb-20 mb-10">
                <div class="flex flex-col lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="w-full lg:w-1/2 m-10">
                        <div class="font-extrabold lg:text-left text-center">
                            <h1 class="lg:text-5xl md:text-4xl text-2xl">
                                Flash Sale GABI Les Privat – Hemat Besar, Kuota Terbatas!
                            </h1>
                            <h2 class="lg:text-3xl md:text-2xl text-md lg:mt-4 md:mt-4 mt-2 lg:mr-8 lg:ml-0 md:mx-25 mx-4 italic bg-secondary p-2 rounded-xl">
                                Belajar Lebih Cerdas, Biaya Lebih Hemat
                            </h2>
                            <h1 class="lg:text-4xl md:text-3xl text-xl lg:mt-4 md:mt-4 mt-2 text-[#085CD2]">
                                BELAJAR LEBIH CERDAS TANPA BIKIN KANTONG JEBOL
                            </h1>
                            <h2 class="lg:text-3xl md:text-2xl text-xl lg:mt-4 md:mt-4 mt-2">
                                Kini Ada Solusi Program
                            </h2>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 lg:m-10 md:m-6">
                        <div class="">
                            <img src="../../../public/img/flashsale/flashsale.webp" alt="Flash Sale" class="rounded-2xl lg:w-[800px] md:w-[600px] w-[380px] mx-auto">
                            <h2 class="font-extrabold lg:text-3xl md:text-2xl text-lg italic mt-4 lg:ml-2 lg:mr-0 md:mx-20 mx-3">
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
                <div class="flex flex-col lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="w-full lg:w-1/2 m-10">
                        <div class="font-extrabold lg:text-4xl md:text-3xl text-2xl lg:text-left text-center">
                            <h1 class="text-[#085CD2] lg:text-5xl md:text-4xl text-2xl">
                                Flash Sale GABI Les Privat – Kuota Terbatas!!!
                            </h1>
                            <h1 class="lg:mt-4 mt-2">
                                Inilah yang paling ditunggu
                            </h1>
                            <h1 class="lg:mt-4 mt-2 text-red-500">
                                Flash Sale GABI!!!!
                            </h1>
                            <h1 class="lg:text-3xl md:text-2xl text-xl lg:mt-4 md:mt-2 bg-[#085CD2] font-light py-1 px-4 lg:mr-48 lg:ml-0 md:mx-34 text-white">
                                “Flash Sale 50% untuk 10 <br> pendaftar pertama minggu ini.”
                            </h1>
                            <h1 class="lg:mt-4 mt-2 text-red-500">
                                SIAPA CEPAT, DIA DAPATTTTT
                            </h1>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 lg:mt-10 md:mt-5 flex justify-end overflow-visible">
                        <div class="relative translate-x-10">
                            <img src="../../../public/img/flashsale/megafon.webp" alt="Mascot">
                        </div>
                    </div>
                </div>
            </div>

            <a :href="waLink" target="_blank" rel="noopener noreferrer" class="absolute lg:left-1/2 md:right-1/3 lg:bottom-15 md:bottom-15 bottom-6 lg:-translate-x-1/6 md:-translate-x-1/2 translate-x-1/5 z-20">
                <button class="bg-green text-white lg:text-2xl md:text-2xl text-lg font-light hover:!bg-green-600 py-3 px-4 rounded-xl duration-300 flex items-center gap-2">
                    Daftar Sekarang
                    <SiWhatsapp class="w-6 h-6"></SiWhatsapp>
                 </button>
            </a>
        </section>

        <!-- Section 3 -->
        <section class="bg-primary lg:py-20 md:py-0">
            <div class="container m-auto px-10 font-onest">
                <div class="flex flex-col-reverse lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="w-full lg:w-1/2 flex justify-start overflow-visible">
                        <div class="relative md:-translate-x-11 -translate-x-10">
                            <img src="../../../public/img/flashsale/tutorSiswa.webp" alt="Tutor dan Siswa" class="lg:w-[600px] md:w-[400px] w-[300px]">
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 lg:m-10 lg:ml-0 md:m-20 mx-0 my-10 relative">
                        <h1 class="text-secondary font-extrabold lg:text-5xl md:text-4xl text-3xl">
                            Kenapa Flash Sale GABI Menguntungkan?
                        </h1>
                        <div class="bg-white rounded-2xl lg:px-12 md:px-10 lg:mr-0 md:mr-10 lg:py-6 md:py-6 py-4 px-10 mt-4">
                            <div class="font-medium lg:text-2xl md:text-xl text-md">
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
                                Medorong motivasi anak karena bisa segera mulai belajar dengan guru yang tepat.
                            </li>
                            </div>
                        </div>
                        <div class="absolute lg:right-1 md:right-12 -bottom-15 lg:translate-x-1/2 md:translate-x-1/2 translate-x-63 z-20">
                            <img src="../../../public/img/flashsale/senyum.webp" alt="Mascot GABI" class="lg:w-[165px] md:w-[165px] w-[130px]">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 4 -->
        <section class="bg-primary pt-10 pb-20">
            <div class="container m-auto lg:px-42 md:px-20 px-5 font-onest lg:mb-20 md:mb-20">
                <div class="w-full lg:m-10 lg:ml-0 md:m-10 md:ml-0 p-2 relative">
                    <h1 class="text-secondary font-extrabold lg:text-5xl md:text-4xl text-2xl text-center">
                        Mengapa Memilih Les Privat GABI saat Flash Sale?
                    </h1>
                    <h3 class="lg:text-3xl md:text-2xl text-lg font-medium text-center italic lg:my-4 md:my-2 lg:mx-48">
                        Selain potongan harga yang menarik, ada banyak alasan kenapa program ini patut dipilih:
                    </h3>
                    <div class="bg-white rounded-2xl lg:px-12 lg:py-8 px-10 py-4 mt-4">
                        <div class="font-medium lg:text-3xl md:text-xl text-md">
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
                    <div class="absolute right-1 lg:-bottom-12 -bottom-15 lg:translate-x-1/2 md:translate-x-1/2 translate-x-6 z-20">
                        <img src="../../../public/img/flashsale/senyum.webp" alt="Mascot GABI" class="lg:w-[180px] md:w-[170px] w-[130px]">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 5 -->
        <section class="bg-secondary lg:py-0 md:pt-10 pt-15">
            <div class="container m-auto px-10 font-onest">
                <div class="flex flex-col lg:flex-row items-center">
                    <!-- Kiri -->
                    <div class="text-left font-extrabold">
                    <h2 class="italic lg:text-5xl md:text-5xl text-4xl">
                        Jangan Lewatkan Kesempatan ini!
                    </h2>
                    <h2 class="bg-white p-2 text-[#085CD2] lg:text-4xl md:text-3xl text-xl lg:mt-4 md:mt-4 mt-2 lg:mr-89 md:mr-36 mr-9">
                        Daftar sekarang, sebelum slot habis!
                    </h2>
                    <h3 class="font-medium lg:text-4xl md:text-3xl text-xl lg:mt-4 md:mt-4 mt-2 lg:mr-46 md:mr-15 mr-8">
                        Dengan guru berpengalaman & harga hemat, GABI jadi pilihan terbaik untuk anak anda.
                    </h3>
                    <a :href="waLink" target="_blank" rel="noopener noreferrer">
                        <button class="bg-green text-white lg:text-2xl md:text-2xl text-xl font-light hover:!bg-green-600 py-3 px-4 rounded-xl duration-300 flex items-center gap-2 lg:mt-4 md:mt-4 mt-2">
                            Daftar Sekarang
                            <SiWhatsapp class="w-6 h-6"></SiWhatsapp>
                        </button>
                    </a>
                </div>

                    <!-- Kanan -->
                    <div class="w-full lg:w-1/2 flex justify-end overflow-visible">
                        <div class="relative lg:translate-x-10 translate-x-10 -mt-15">
                            <img src="../../../public/img/flashsale/senyumBG.webp" alt="Mascot" class="lg:w-[700px] md:w-[350px] w-[280px]">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </AppLayout>
</template>