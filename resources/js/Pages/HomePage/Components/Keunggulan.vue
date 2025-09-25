<script setup>
import { ref } from "vue";
import { LuChevronLeft, LuChevronRight } from "vue-icons-plus/lu";
import { SiWhatsapp } from "vue-icons-plus/si";

const scrollRef = ref(null);

const scroll = (direction) => {
    if (scrollRef.value) {
        const { scrollLeft, clientWidth } = scrollRef.value;
        const scrollTo =
            direction === "left"
                ? scrollLeft - clientWidth
                : scrollLeft + clientWidth;

        scrollRef.value.scrollTo({
            left: scrollTo,
            behavior: "smooth",
        });
    }
};

const items = [
    {
        title: "Personal Match Tutor",
        desc: "GABI mencocokkan tutor dengan kebutuhan akademik, gaya belajar, dan preferensi kepribadian siswa. Termasuk trial & opsi rematch gratis jika belum cocok.",
    },
    {
        title: "Dukungan Materi Pelengkap",
        desc: "Worksheet, simulasi, dan bank soal dibuatkan khusus sesuai kebutuhanmu untuk mendukung aktivitas belajarmu!",
    },
    {
        title: "Tutor Kompeten dan Eksklusif",
        desc: "Setiap tutor melewati seleksi dan sesi microteaching agar metode mengajar lebih teruji dan konsisten.",
    },
    {
        title: "Harga Fleksibel",
        desc: "Skema biaya menyesuaikan lokasi sehingga lebih adil dan ramah di kantong.",
    },
    {
        title: "Fleksibilitas jadwal",
        desc: "Les bisa diatur pagi, siang, atau sore, menyesuaikan agenda keluarga.",
    },
    {
        title: "Transparansi progres",
        desc: "Orang tua menerima update rutin mengenai progres anak, termasuk capaian, hambatan dan tips penguatan pribadi. Semua disajikan dengan jelas dan mudah dipahami.",
    },
    {
        title: "Dukungan dua arah",
        desc: "GABI memastikan kepuasan orang tua, kenyamanan siswa, dan penghargaan terhadap tutor berjalan seimbang",
    },
];
</script>

<template>
    <section class="bg-secondary py-12 px-6 text-center">
        <!-- Judul -->
        <h2 class="text-3xl font-bold text-black">Keunggulan GABI</h2>
        <p class="text-lg text-gray-800 mt-2">Apa yang Membuat GABI Berbeda?</p>

        <!-- Container scroll -->
        <div class="relative mt-8">
            <!-- Tombol Kiri -->
            <button
                @click="scroll('left')"
                class="absolute left-0 top-1/2 -translate-y-1/2 bg-primary text-white p-3 rounded-full shadow-md z-10"
            >
                <LuChevronLeft class="w-5 h-5" />
            </button>

            <!-- Cards -->
            <div
                ref="scrollRef"
                class="flex gap-4 overflow-x-auto scrollbar-hide scroll-smooth px-5"
            >
                <div
                    v-for="(item, index) in items"
                    :key="index"
                    class="flex-shrink-0 w-72 bg-white rounded-xl shadow-lg flex flex-col"
                >
                    <!-- Konten -->
                    <div class="p-6 flex-1">
                        <h3
                            class="font-bold text-lg text-black mb-3 text-center"
                        >
                            {{ item.title }}
                        </h3>
                        <hr class="mb-4 border-gray-300" />
                        <p
                            class="text-gray-700 text-sm leading-relaxed text-center"
                        >
                            {{ item.desc }}
                        </p>
                    </div>

                    <!-- Footer nempel bawah -->
                    <div class="bg-black h-4 rounded-b-xl mt-auto"></div>
                </div>
            </div>

            <!-- Tombol Kanan -->
            <button
                @click="scroll('right')"
                class="absolute right-0 top-1/2 -translate-y-1/2 bg-primary text-white p-3 rounded-full shadow-md z-10"
            >
                <LuChevronRight class="w-5 h-5" />
            </button>
        </div>

        <!-- CTA -->
        <div class="mt-10">
            <a
                href="https://wa.me/6281234567890"
                target="_blank"
                class="bg-green hover:bg-success text-white font-semibold px-6 py-2 rounded-xl border-2 border-white flex items-center gap-2 justify-center w-fit mx-auto shadow"
            >
                <SiWhatsapp class="mr-2 w-5 h-5" />
                Temukan Paket Les Kamu
            </a>
        </div>
    </section>
</template>

<style>
/* Hide scrollbar (optional) */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
