<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { Fa6Whatsapp, Fa6ArrowRight, Fa6ArrowLeft } from "vue-icons-plus/fa6";
import { ref, computed, onMounted, watch } from "vue";
import { Head } from '@inertiajs/vue3';

// === PROMO UTAMA (Alasan Memilih GABI) ===
const promos = [
    {
        image: "img/promo/2.webp",
        title: "Tutor Terbaik",
        desc: "Pengajar pilihan dari kampus ternama, berpengalaman, dan siap membimbing dengan sabar.",
    },
    {
        image: "img/promo/1.webp",
        title: "Belajar Fleksibel",
        desc: "Bisa tatap muka di rumah atau online, sesuai kenyamanan dan kebutuhan anak.",
    },
    {
        image: "img/promo/4.webp",
        title: "Lengkap Semua Jenjang",
        desc: "Mendukung semua mata pelajaran dari TK, SD, SMP, SMA, hingga umum, dengan kurikulum nasional & internasional.",
    },
    {
        image: "img/promo/5.webp",
        title: "Laporan & Monitoring",
        desc: "Ada evaluasi rutin mingguan dan bulanan, sehingga orang tua mudah memantau progres belajar anak.",
    },
    {
        image: "img/promo/3.webp",
        title: "Hasil Lebih Maksimal",
        desc: "Pendampingan step by step bikin anak lebih percaya diri menghadapi PR maupun ujian.",
    },
];

// === PROMO SPESIAL ===
const promoSpecials = [
    {
        image: "img/promo/8.webp",
        title: "Trial Les Privat Cuma Rp50.000",
        desc: "Masih ragu mau daftar paket langsung? Tenang, GABI kasih kesempatan buat coba dulu dengan harga super terjangkau.",
    },
    {
        image: "img/promo/6.webp",
        title: "Diskon 10% Setelah Trial",
        desc: "Kalau cocok setelah trial, kamu bisa lanjut paket 1 bulan dan langsung dapat diskon 10%!",
    },
    {
        image: "img/promo/7.webp",
        title: "Gratis Bahan Ajar & Referensi Belajar",
        desc: "Belajar makin lengkap karena kamu dapat bahan ajar & referensi sesuai jenjang.",
    },
];

// === RESPONSIVE SLIDES ===
const currentIndex = ref(0);
const specialIndex = ref(0);
const isMobile = ref(window.innerWidth < 768);

const slides = computed(() => {
    const perSlide = isMobile.value ? 1 : 3;
    const result = [];
    for (let i = 0; i < promos.length; i += perSlide) {
        result.push(promos.slice(i, i + perSlide));
    }
    return result;
});

const slidesSpecial = computed(() => {
    const perSlide = isMobile.value ? 1 : 3;
    const result = [];
    for (let i = 0; i < promoSpecials.length; i += perSlide) {
        result.push(promoSpecials.slice(i, i + perSlide));
    }
    return result;
});

const maxIndex = computed(() => slides.value.length - 1);
const maxSpecial = computed(() => slidesSpecial.value.length - 1);

function nextSlide() {
    if (currentIndex.value < maxIndex.value) currentIndex.value++;
}
function prevSlide() {
    if (currentIndex.value > 0) currentIndex.value--;
}

function nextSpecial() {
    if (specialIndex.value < maxSpecial.value) specialIndex.value++;
}
function prevSpecial() {
    if (specialIndex.value > 0) specialIndex.value--;
}

// setSpecial: pindah langsung ke card (dipakai untuk dot)
function setSpecial(idx) {
    specialIndex.value = idx;
}

// resize handling: update isMobile dan clamp index agar tidak out-of-range
function handleResize() {
    isMobile.value = window.innerWidth < 768;
    // clamp indexes based on computed max values
    currentIndex.value = Math.min(currentIndex.value, maxIndex.value);
    specialIndex.value = Math.min(specialIndex.value, maxSpecial.value);
}

onMounted(() => {
    handleResize();
    window.addEventListener("resize", handleResize);
});

// juga watch perubahan max agar index otomatis di-clamp bila computed berubah
watch(maxIndex, (v) => {
    currentIndex.value = Math.min(currentIndex.value, v);
});
watch(maxSpecial, (v) => {
    specialIndex.value = Math.min(specialIndex.value, v);
});
</script>

<template>
    <AppLayout>
        <Head title="Promo GABI Les Privat" />

        <div class="bg-white lg:px-22 px-7 w-full py-5">
            <!-- Header Section -->
            <div class="lg:py-6 py-0">
                <div class="mb-6">
                    <h1
                        class="text-3xl lg:text-4xl font-bold text-black mb-4 lg:px-10 px-0 lg:text-center text-justify"
                    >
                        Promo GABI Les Privat - Solusi Belajar Semua <br />
                        Mata Pelajaran
                    </h1>
                </div>
                <div class="text-start mb-12">
                    <p
                        class="text-gray-600 leading-relaxed mx-auto text-sm md:text-base text-justify"
                    >
                        Pernah nggak sih orang tua merasa bingung gimana caranya
                        bikin anak belajar lebih gampang fokus, tanpa harus
                        stress mengikuti ritme sekolah yang kadang terlalu
                        cepat? Atau mungkin kamu sebagai pelajar sering merasa
                        ketinggalan materi, padahal sudah berusaha keras
                        mengikuti pelajaran di kelas?
                    </p>
                    <p
                        class="text-gray-600 leading-relaxed mx-auto mt-4 text-sm md:text-base text-justify"
                    >
                        Tenang, kamu nggak sendirian kok. Banyak orang tua dan
                        siswa mengalami hal yang sama. Setiap anak itu unik,
                        punya ritme dan gaya belajar berbeda. Ada yang cepat
                        tangkap kalau belajar dengan gambar, ada yang lebih
                        paham kalau dijelaskan langsung, bahkan ada juga yang
                        butuh waktu lebih lama untuk mengulang materi biar
                        benar-benar paham. Sayangnya, sistem belajar di sekolah
                        belum tentu bisa menyesuaikan dengan kebutuhan tiap
                        anak.
                    </p>
                    <p
                        class="text-gray-600 leading-relaxed mx-auto mt-4 text-sm md:text-base text-justify"
                    >
                        Nah, di sinilah GABI Les Privat hadir sebagai solusi.
                        Dengan pendekatan personal, GABI percaya bahwa belajar
                        harus mengikuti gaya anak, bukan sebaliknya. Dan kabar
                        baiknya, sekarang ada promo spesial buat kamu yang
                        pengen coba pengalaman belajar bareng GABI!
                    </p>
                </div>

                <!-- Alasan Memilih GABI Section -->
                <div class="mb-16">
                    <h2
                        class="text-2xl md:text-3xl font-bold text-gray-800 mb-10 lg:text-start text-center"
                    >
                        Alasan Memilih GABI Les Privat?
                    </h2>
                    <div class="relative lg:hidden">
                        <!-- Tombol navigasi -->
                        <button
                            v-if="currentIndex > 0"
                            @click="prevSlide"
                            class="absolute left-0 top-1/2 -translate-y-1/2 bg-secondary text-white border border-gray-300 rounded-full px-2 py-2 shadow hover:bg-gray-100 z-10"
                        >
                            <Fa6ArrowLeft />
                        </button>
                        <button
                            v-if="currentIndex < maxIndex"
                            @click="nextSlide"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-secondary border text-white border-gray-300 rounded-full px-2 py-2 shadow hover:bg-gray-100 z-10"
                        >
                            <Fa6ArrowRight />
                        </button>

                        <!-- Container -->
                        <div class="overflow-hidden">
                            <div
                                class="flex transition-transform duration-500 ease-in-out"
                                :style="{
                                    transform: `translateX(-${
                                        currentIndex * 100
                                    }%)`,
                                }"
                            >
                                <div
                                    v-for="(slide, index) in slides"
                                    :key="index"
                                    class="min-w-full flex gap-4"
                                >
                                    <div
                                        v-for="(item, i) in slide"
                                        :key="i"
                                        class="flex-1 rounded-lg p-3 flex flex-col"
                                    >
                                        <div
                                            class="flex justify-center items-center"
                                        >
                                            <img
                                                :src="item.image"
                                                alt=""
                                                class="w-46 h-full"
                                            />
                                        </div>
                                        <h3
                                            class="font-bold mt-2 text-center flex-grow flex items-center justify-center text-xl"
                                        >
                                            {{ item.title }}
                                        </h3>
                                        <p
                                            class="text-center text-gray-500 text-md mt-3"
                                        >
                                            {{ item.desc }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="lg:flex hidden grid grid-cols-1 md:grid-cols-3 gap-6 mb-8"
                    >
                        <!-- Guru Profesional -->
                        <div class="p-6 text-center transition-shadow">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4"
                            >
                                <img
                                    :src="'/img/promo/2.webp'"
                                    alt="Maskot admin pakai bohlam"
                                />
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-2">
                                Tutor Terbaik
                            </h3>
                            <p class="text-gray-600 text-sm">
                                Pengajar pilihan dari kampus ternama,
                                berpengalaman, dan siap membimbing dengan sabar.
                            </p>
                        </div>

                        <!-- Jadwal Fleksibel -->
                        <div class="p-6 text-center transition-shadow">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4"
                            >
                                <img
                                    :src="'/img/promo/1.webp'"
                                    alt="Maskot admin pakai bohlam"
                                />
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-2">
                                Belajar Fleksibel
                            </h3>
                            <p class="text-gray-600 text-sm">
                                Bisa tatap muka di rumah atau online, sesuai
                                kenyamanan dan kebutuhan anak.
                            </p>
                        </div>

                        <!-- Harga Terjangkau -->
                        <div class="p-6 text-center transition-shadow">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4"
                            >
                                <img
                                    :src="'/img/promo/4.webp'"
                                    alt="Maskot admin pakai bohlam"
                                />
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-2">
                                Lengkap Semua Jenjang
                            </h3>
                            <p class="text-gray-600 text-sm">
                                Mendukung semua mata pelajaran dari TK, SD, SMP,
                                SMA, hingga umum, dengan kurikulum nasional &
                                internasional.
                            </p>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto lg:flex hidden"
                    >
                        <!-- Laporan Belajar -->
                        <div class="p-6 text-center transition-shadow">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4"
                            >
                                <img
                                    :src="'/img/promo/5.webp'"
                                    alt="Maskot admin pakai bohlam"
                                />
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-2">
                                Laporan & Monitoring
                            </h3>
                            <p class="text-gray-600 text-sm">
                                Ada evaluasi rutin mingguan dan bulanan,
                                sehingga orang tua mudah memantau progres
                                belajar anak.
                            </p>
                        </div>

                        <!-- Bisa Online/Offline -->
                        <div class="p-6 text-center transition-shadow">
                            <div
                                class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4"
                            >
                                <img
                                    :src="'/img/promo/3.webp'"
                                    alt="Maskot admin pakai bohlam"
                                />
                            </div>
                            <h3 class="font-bold text-lg text-gray-800 mb-2">
                                Hasil Lebih Maksimal
                            </h3>
                            <p class="text-gray-600 text-sm">
                                Pendampingan step by step bikin anak lebih
                                percaya diri menghadapi PR maupun ujian.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- === PROMO SPESIAL === -->
                <div class="mb-14">
                    <!-- Slide untuk mobile -->
                    <div class="relative p-3 lg:hidden">
                        <button
                            v-if="specialIndex > 0"
                            @click="prevSpecial"
                            class="absolute left-0 top-1/2 -translate-y-1/2 bg-white border border-black text-black rounded-full px-2 py-2 shadow z-10"
                        >
                            <Fa6ArrowLeft />
                        </button>
                        <button
                            v-if="specialIndex < maxSpecial"
                            @click="nextSpecial"
                            class="absolute right-0 top-1/2 -translate-y-1/2 bg-white border border-black text-black rounded-full px-2 py-2 shadow z-10"
                        >
                            <Fa6ArrowRight />
                        </button>

                        <div class="overflow-hidden">
                            <div
                                class="flex transition-transform duration-500 ease-in-out"
                                :style="{
                                    transform: `translateX(-${
                                        specialIndex * 100
                                    }%)`,
                                }"
                            >
                                <div
                                    v-for="(slide, sIdx) in slidesSpecial"
                                    :key="sIdx"
                                    class="min-w-full h-full flex-1 flex flex-col items-center px-3 items-stretch"
                                >
                                    <div
                                        v-for="(promo, i) in slide"
                                        :key="i"
                                        class="bg-primary text-white rounded-2xl shadow-lg overflow-hidden flex flex-col w-full"
                                    >
                                        <div class="text-center p-3">
                                            <img
                                                :src="promo.image"
                                                alt=""
                                                class="mx-auto"
                                            />
                                        </div>
                                        <div class="px-4 pb-5 pt-2">
                                            <h3
                                                class="text-center font-semibold text-lg mb-2"
                                            >
                                                {{ promo.title }}
                                            </h3>
                                            <p class="text-justify text-sm">
                                                {{ promo.desc }}
                                            </p>
                                            <div
                                                class="pt-4 flex justify-center"
                                            >
                                                <a
                                                    href="https://wa.me/6285712230349?text=Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu?"
                                                    target="_blank"
                                                    class="flex items-center gap-2 bg-green border-2 border-white text-white font-semibold text-sm px-8 py-2 rounded-xl hover:scale-105 transition-all duration-300 shadow-lg"
                                                >
                                                    <Fa6Whatsapp
                                                        class="w-5 h-5"
                                                    />
                                                    Tanya Sekarang
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- DOT NAV (hanya tampil di mobile) -->
                        <div
                            class="flex justify-center items-center gap-2 mt-4"
                        >
                            <button
                                v-for="(_, idx) in promoSpecials"
                                :key="idx"
                                @click="setSpecial(idx)"
                                :aria-label="`Pindah ke promo ke-${idx + 1}`"
                                :class="[
                                    'w-3 h-3 rounded-full transition-transform transform',
                                    specialIndex === idx
                                        ? 'scale-125 bg-secondary shadow-lg w-[14px] h-[14px]'
                                        : 'bg-primary',
                                ]"
                            />
                        </div>
                    </div>

                    <!-- Promo Special Section -->
                    <div class="mb-16 lg:flex flex-col hidden">
                        <div>
                            <h2
                                class="text-2xl md:text-3xl font-bold text-center text-gray-800 mb-4"
                            >
                                Promo Special Untuk Sobat GABI
                            </h2>
                            <p
                                class="text-center text-gray-600 mb-10 text-sm md:text-base px-10"
                            >
                                Oke, MinBi bakal spill promo-promo di GABI Les
                                Privat buat kamu ya, pastiin kamu enggak kelewat
                                infonya agar bimbel kamu di GABI nanti jadi
                                lebih menguntungkan!
                            </p>
                        </div>
                        <div
                            class="grid grid-cols-1 md:grid-cols-3 gap-6 items-stretch"
                        >
                            <!-- Promo 1 -->
                            <div
                                class="bg-primary rounded-2xl shadow-lg overflow-hidden flex flex-col h-full"
                            >
                                <div
                                    class="bg-primary text-center p-3 relative"
                                >
                                    <img
                                        :src="'/img/promo/8.webp'"
                                        alt="Maskot admin pakai bohlam"
                                    />
                                </div>
                                <div
                                    class="flex flex-col justify-between flex-grow px-4 pb-5 pt-2 text-white"
                                >
                                    <div class="flex-1">
                                        <h1
                                            class="text-center font-semibold min-h-[60px] flex items-center justify-center"
                                        >
                                            Trial Les Privat Cuma Rp50.000
                                        </h1>
                                        <p class="text-justify text-sm mt-4">
                                            Masih ragu mau daftar paket
                                            langsung? Tenang, GABI kasih
                                            kesempatan buat coba dulu dengan
                                            harga super terjangkau. Cukup
                                            Rp50.000 aja, kamu udah bisa dapet
                                            1x pertemuan trial. Dari sini, orang
                                            tua bisa lihat metode pengajaran
                                            tutor, sementara anak bisa ngerasain
                                            dulu suasana belajarnya. Jadi, kalau
                                            cocok, tinggal lanjut ke paket
                                            berikutnya deh!
                                        </p>
                                    </div>
                                    <div
                                        class="pt-4 flex justify-center mt-auto"
                                    >
                                        <a
                                            href="https://wa.me/6285712230349?text=Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu?"
                                            target="_blank"
                                            class="flex items-center gap-3 bg-green border-2 border-white text-white font-semibold text-sm md:text-md px-14 py-2 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                                        >
                                            <Fa6Whatsapp class="w-6 h-6" />
                                            Tanya Sekarang
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Promo 2 -->
                            <div
                                class="bg-primary rounded-2xl shadow-lg overflow-hidden flex flex-col h-full"
                            >
                                <div
                                    class="bg-primary text-center p-3 relative"
                                >
                                    <img
                                        :src="'/img/promo/6.webp'"
                                        alt="Maskot admin pakai bohlam"
                                    />
                                </div>
                                <div
                                    class="flex flex-col justify-between flex-grow px-4 pb-5 pt-2 text-white"
                                >
                                    <div class="flex-1">
                                        <h1
                                            class="text-center font-semibold min-h-[60px] flex items-center justify-center"
                                        >
                                            Diskon 10% Setelah Trial
                                        </h1>
                                        <p class="text-justify text-sm mt-4">
                                            Nah, kalau setelah trial kamu merasa
                                            cocok, langsung aja ambil paket 1
                                            bulan biar lebih hemat. Dengan
                                            daftar setelah trial, kamu bisa
                                            langsung dapetin diskon 10%. Jadi,
                                            bukan cuma kualitas belajar yang
                                            terjamin, tapi juga biaya lebih
                                            ringan di kantong.
                                        </p>
                                    </div>
                                    <div
                                        class="pt-4 flex justify-center mt-auto"
                                    >
                                        <a
                                            href="https://wa.me/6285712230349?text=Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu?"
                                            target="_blank"
                                            class="flex items-center gap-3 bg-green border-2 border-white text-white font-semibold text-sm md:text-md px-14 py-2 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                                        >
                                            <Fa6Whatsapp class="w-6 h-6" />
                                            Tanya Sekarang
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Promo 3 -->
                            <div
                                class="bg-primary rounded-2xl shadow-lg overflow-hidden flex flex-col h-full"
                            >
                                <div
                                    class="bg-primary text-center p-3 relative"
                                >
                                    <img
                                        :src="'/img/promo/7.webp'"
                                        alt="Maskot admin pakai bohlam"
                                    />
                                </div>
                                <div
                                    class="flex flex-col justify-between flex-grow px-4 pb-5 pt-2 text-white"
                                >
                                    <div class="flex-1">
                                        <h1
                                            class="text-center font-semibold min-h-[60px] flex items-center justify-center"
                                        >
                                            Gratis Bahan Ajar & Referensi
                                            Belajar
                                        </h1>
                                        <p class="text-justify text-sm mt-4">
                                            Belajar bareng GABI makin lengkap
                                            karena kamu bakal dapet bahan ajar &
                                            referensi belajar berbentuk
                                            softfile. Materinya disesuaikan
                                            dengan jenjang masing-masing, mulai
                                            TK, SD, SMP, sampai SMA. Jadi enggak
                                            perlu repot lagi cari tambahan soal
                                            atau materi pendukung, semuanya udah
                                            disiapkan oleh GABI.
                                        </p>
                                    </div>
                                    <div
                                        class="pt-4 flex justify-center mt-auto"
                                    >
                                        <a
                                            href="https://wa.me/6285712230349?text=Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu?"
                                            target="_blank"
                                            class="flex items-center gap-3 bg-green border-2 border-white text-white font-semibold text-sm md:text-md px-14 py-2 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                                        >
                                            <Fa6Whatsapp class="w-6 h-6" />
                                            Tanya Sekarang
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Syarat dan Ketentuan -->
                    <div class="lg:p-8 p-0 mb-8 lg:mt-0 mt-16">
                        <h2
                            class="text-2xl font-bold text-black mb-6 text-center"
                        >
                            Syarat dan Ketentuan Promo
                        </h2>
                        <h1 class="text-lg font-medium text-black mb-2">
                            Agar lebih jelas, berikut beberapa ketentuan yang
                            berlaku :
                        </h1>
                        <ol
                            class="list-decimal font-medium list-inside space-y-2 text-justify text-base text-md leading-relaxed"
                        >
                            <li>
                                Promo berlaku untuk pendaftaran baru (siswa yang
                                belum pernah les di GABI).
                            </li>
                            <li>
                                Trial Rp50.000 hanya untuk 1x pertemuan pertama
                                dengan durasi 60 menit.
                            </li>
                            <li>
                                Diskon 10% berlaku untuk pembayaran paket 1
                                bulan (8x pertemuan) maksimal 3 hari setelah
                                trial.
                            </li>
                            <li>
                                Gratis bahan ajar & latihan soal berlaku untuk
                                jenjang TK–SMA dan semua mata pelajaran (materi
                                disesuaikan).
                            </li>
                            <li>
                                Promo tidak dapat digabungkan dengan promo
                                lainnya.
                            </li>
                            <li>
                                Jadwal trial dan les reguler akan dikonfirmasi
                                sesuai ketersediaan tutor.
                            </li>
                            <li>
                                Pembayaran dilakukan via rekening resmi GABI Les
                                Privat.
                            </li>
                        </ol>
                    </div>
                    <div>
                        <p class="text-black font-medium text-md lg:text-lg">
                            Siapa nih yang bilang kalau les privat berkualitas,
                            dengan tutor berpengalaman dan fasilitas lengkap itu
                            pasti mahal? Bareng GABI Les Privat, kamu bisa
                            dapetin semua itu dengan harga yang tetap ramah di
                            kantong, apalagi ada promo spesial, trial, diskon,
                            dan bahan ajar gratis yang bisa langsung
                            dimanfaatkan.
                        </p>
                        <p
                            class="mt-4 text-black font-medium text-md lg:text-lg"
                        >
                            Kalau kata MinBi sih, jangan tunggu lama-lama deh!
                            Yuk, coba daftar di GABI Les Privat sekarang.
                            Promonya nungguin kamu, dan anak pun siap jadi makin
                            semangat belajar!
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="flex justify-center text-center mt-2">
                        <div class="lg:mt-20 mt-13">
                            <a
                                href="https://wa.me/6285712230349?text=Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu?"
                                target="_blank"
                                class="flex items-center lg:gap-3 gap-1 bg-green text-white font-semibold text-sm md:text-md lg:px-14 px-5 py-2 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl"
                            >
                                <Fa6Whatsapp class="w-8 h-8" />
                                Tanya Sekarang
                            </a>
                        </div>
                        <div>
                            <img
                                :src="'/img/maskot/maskot-cta-1.webp'"
                                alt="Maskot admin pakai bohlam"
                                class="lg:w-56 w-36 lg:h-56 h-36"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
