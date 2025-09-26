<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";
import { Fa6RegMessage } from "vue-icons-plus/fa6";

// array logo kurikulum
const logos = [
    "/img/kurikulum/Cambrige.webp",
    "/img/kurikulum/ib.webp",
    "/img/kurikulum/Singapore.webp",
    "/img/kurikulum/nasional.webp",
];

const problems = [
    {
        title: "Biaya les terasa memberatkan?",
        desc: "Harga les privat di GABI disesuaikan domisili, adil, dan ramah kantong. Orang tua bisa pilih sesuai kemampuan tanpa kompromi kualitas.",
    },
    {
        title: "Jadwal Belajar Tidak Fleksibel?",
        desc: "Les privat GABI dapat diatur pagi, siang, atau sore secara online dan offline! Tetap seimbang dengan aktivitas anak dan keluarga.",
    },
    {
        title: "Tutor Kurang Komunikatif?",
        desc: "Tutor di les privat GABI terlatih microteaching dan menjaga etika komunikasi. Orang tua tetap update, anak tetap nyaman.",
    },
    {
        title: "Metode Belajar Monoton?",
        desc: "Metode interaktif dan materi variatif membuat anak tetap bersemangat. Hasil belajar lebih maksimal dan menyenangkan!",
    },
];
</script>

<template>
    <div
        class="flex flex-col lg:flex-row px-6 md:px-10 w-full py-5 bg-gray-100"
    >
        <!-- LEFT CONTENT -->
        <div
            class="w-full lg:w-7/12 space-y-6 text-left py-6 lg:py-10 lg:px-10"
        >
            <h1
                class="text-lg sm:text-2xl md:text-3xl lg:text-2xl font-bold leading-snug sm:leading-tight text-gray-900 font-onest"
            >
                Les Privat TK, SD, SMP, SMA, MAHASISWA dan KARYAWAN Terbaik di
                Jabodetabek dan Pulau Jawa. Semua Pelajaran, Semua Jenjang.
                <span class="font-bold text-blue-800">Satu Solusi GABI</span>
            </h1>
            <p
                class="text-gray-500 text-xs sm:text-sm md:text-base font-onest font-extralight"
            >
                GABI siapkan guru privat ke rumah atau online buat semua mata
                pelajaran dari TK sampai SMA bahkan kuliah. GABI punya ribuan
                guru berpengalaman yang bisa disesuaikan sama kebutuhan kamu.
            </p>

            <!-- CTA Button -->
            <div>
                <a
                    href="https://wa.me/6281234567890"
                    class="inline-flex items-center px-4 py-2 sm:px-6 sm:py-3 bg-green hover:bg-green-600 text-white text-sm sm:text-md font-semibold rounded-lg shadow transition"
                >
                    <SiWhatsapp class="mr-2 w-4 h-4 sm:w-5 sm:h-5" />Cari Guru
                </a>
            </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="w-full lg:w-5/12 flex justify-center relative mt-6 lg:mt-0">
            <div class="relative">
                <!-- Polygon Background -->
                <div
                    class="absolute top-[4rem] left-[9.8rem] -translate-x-[9.8rem] xl:left-[11rem] xl:top-[5rem] bg-[radial-gradient(circle,_#feeca4_26%,_#fdd636_60%,_#fdb436_100%)] z-0 rounded-full w-[84vw] max-w-[310px] aspect-square"
                ></div>
                <!-- Gambar -->
                <img
                    :src="'/img/maskot/Maskot.webp'"
                    alt="Student"
                    class="w-72 sm:w-60 md:w-72 lg:w-72 xl:w-80 rounded-lg relative left-2 sm:left-3"
                />
            </div>
        </div>
    </div>

    <!-- kurikulum -->
    <div
        class="px-4 sm:px-6 md:px-10 w-full py-8 sm:py-10 relative -top-16 lg:-top-[83px]"
    >
        <div
            class="bg-primary p-2 sm:p-3 rounded-2xl w-full overflow-hidden shadow-lg"
        >
            <div class="flex items-center gap-6 sm:gap-10 animate-slide">
                <!-- Looping dua kali supaya infinite -->
                <template v-for="n in 4" :key="n">
                    <img
                        v-for="(logo, i) in logos"
                        :key="`${n}-${i}`"
                        :src="logo"
                        alt="kurikulum"
                        class="w-20 h-20 md:w-24 md:h-24 object-contain"
                    />
                </template>
            </div>
        </div>
    </div>

    <!-- Halaman Problem Solusi -->

    <div class="bg-white w-full relative -top-16 px-4 sm:px-6 md:px-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <!-- LEFT CONTENT -->
            <div
                class="space-y-6 lg:px-0 px-5 text-left relative top-7 lg:-top-16"
            >
                <p class="text-gray-800 lg:text-md text-mlg font-medium mb-2">
                    Problem & Solusi
                </p>
                <h2
                    class="text-3xl sm:text-3xl md:text-4xl font-bold leading-snug text-gray-900"
                >
                    Belajar jadi beban? <br />
                    Atau tutor yang membuat orang tua kecewa?
                </h2>
                <p class="text-gray-800 text-base hidden lg:block">
                    Tenang Kami Punya Jawabannya!
                </p>

                <div class="hidden lg:block">
                    <a
                        href="https://wa.me/6281234567890"
                        target="_blank"
                        class="inline-flex items-center px-5 py-3 bg-green hover:bg-green-900 text-white text-sm sm:text-base font-semibold rounded-lg shadow transition"
                    >
                        <SiWhatsapp class="mr-2 w-5 h-5" /> Konsultasikan dengan
                        admin
                    </a>
                </div>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 lg:px-0 px-5">
                <div
                    v-for="(item, i) in problems"
                    :key="i"
                    class="relative bg-primary text-white p-5 mt-3 rounded-2xl shadow-md"
                >
                    <!-- Icon chat -->
                    <div
                        class="absolute -top-5 -left-5 bg-secondary rounded-full p-2 shadow-md"
                    >
                        <Fa6RegMessage />
                    </div>

                    <h3 class="font-bold text-lg mb-2 text-center">
                        {{ item.title }}
                    </h3>
                    <p class="text-sm leading-relaxed">
                        {{ item.desc }}
                    </p>
                </div>
            </div>

            <div class="block lg:hidden px-5 mt-0">
                <p class="text-gray-900 font-semibold text-2xl  mb-5">
                    Tenang Kami Punya Jawabannya!
                </p>
                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    class="inline-flex items-center px-10 py-3 bg-green-500 hover:bg-green-600 text-white text-sm sm:text-base font-semibold rounded-lg shadow transition"
                >
                    <SiWhatsapp class="mr-2 w-5 h-5" /> Konsultasikan dengan
                    admin
                </a>
            </div>
        </div>
    </div>
</template>

<style scoped>
@keyframes slide {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-50%);
    }
}
.animate-slide {
    display: flex;
    width: max-content;
    animation: slide 12s linear infinite;
}
</style>
