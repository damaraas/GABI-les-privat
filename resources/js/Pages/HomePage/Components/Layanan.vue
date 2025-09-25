<script setup>
import { ref } from "vue";
import { LuChevronLeft, LuChevronRight } from "vue-icons-plus/lu";
import { IoWarningOutline, IoCheckmarkCircle } from "vue-icons-plus/io";

const categories = ["Formal", "Bahasa", "Tech"];
const activeCategory = ref("Formal");

const packages = ref({
    Formal: [
        {
            title: "Les Privat TK",
            price: "Rp 1.016.000",
            sessions: "sesi dan 60-90 menit per-sesi",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-secondary",
            features: [
                "Kreativitas ",
                "Motorik halus",
                "Calistung",
                "Persiapan masuk SD",
                "Bahasa dan Lagu",
            ],
        },
        {
            title: "Les Privat SD (3-5)",
            price: "Rp 1.176.000",
            sessions: " sesi dan 60-90 menit per-sesi",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-sky-300 border-sky-400",
            features: [
                "Matematika",
                "IPA",
                "Bahasa Indonesia",
                "English basic",
            ],
        },
        {
            title: "Les Privat SMP",
            price: "Rp 1.376.000",
            sessions: " sesi dan 60-90 menit per-sesi",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-[#45FF4B]",
            features: ["Semua mapel", "Persiapan UN", "Penguatan konsep ujian"],
        },
        {
            title: "Les Privat SMA",
            price: "Rp 1.616.000",
            sessions: " sesi dan 60-90 menit per-sesi",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-secondary",
            features: [
                "Semua mapel",
                "IPA/IPS",
                "Matematika",
                "Fisika",
                "Ekonomi, dll.",
            ],
        },
        {
            title: "Les Persiapan UTBK",
            price: "Rp 1.736.000",
            sessions: " sesi (Diagnosis Test + TPS & TKA + Practice/Try Out)",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-sky-300 border-sky-400",
            features: [
                "Diagnosis Test",
                "TPS & TKA (Saintek/Soshum)",
                "Practice / Try Out",
            ],
        },
    ],
    Tech: [
        {
            title: "Les Coding",
            price: "Rp 2.000.000",
            sessions: " sesi per-sesi 90 menit",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-secondary",
            features: [
                "Dasar algoritma & logika",
                "Scratch/Blockly",
                "Python visual",
                "HTML & CSS, JavaScript",
                "Database (MySQL)",
                "React",
            ],
        },
    ],
    Bahasa: [
        {
            title: "Les Privat Mengaji",
            price: "Rp 800.000",
            sessions: " sesi per-sesi 60 menit",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-secondary",
            features: ["Iqro", "Tahsin", "Tahfidz", "Bimbingan Al-Qur’an"],
        },
        {
            title: "Les Privat Bahasa Mandarin",
            price: "Rp 2.000.000",
            sessions: " sesi per-sesi 60 menit",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-sky-300 border-sky-400",
            features: [
                "Pengenalan Pinyin",
                "Penulisan Hanzi",
                "Persiapan HSK 1-6",
            ],
        },
        {
            title: "Program English (IELTS/TOEFL)",
            price: "Rp 1.700.000",
            sessions: " sesi per-sesi 60 menit",
            notes: "Harga bisa berubah sesuai area",
            color: "bg-green-400",
            features: [
                "Diagnosis Test",
                "Listening Comprehension",
                "Grammar & Reading",
                "Writing & Speaking",
                "Practice, Try Out",
            ],
        },
    ],
});

const scrollRef = ref(null);

const scroll = (direction) => {
    if (scrollRef.value) {
        const { scrollLeft, clientWidth } = scrollRef.value;
        const scrollTo =
            direction === "left"
                ? scrollLeft - clientWidth
                : scrollLeft + clientWidth;
        scrollRef.value.scrollTo({ left: scrollTo, behavior: "smooth" });
    }
};
</script>

<template>
    <section class="py-12 bg-white px-6">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-black">Layanan & Paket Harga</h2>
            <p class="text-lg text-gray-700">
                Paket Rekomendasi untuk Kamu, TK-SMA
            </p>
        </div>

        <!-- Tabs -->
        <div class="flex justify-center gap-4 mb-8">
            <button
                v-for="cat in categories"
                :key="cat"
                @click="activeCategory = cat"
                class="px-6 py-2 rounded-md font-semibold transition"
                :class="
                    activeCategory === cat
                        ? 'bg-secondary text-black'
                        : 'bg-warning text-gray-700'
                "
            >
                {{ cat }}
            </button>
        </div>

        <!-- Cards -->
        <div class="relative">
            <!-- Tombol kiri mobile -->
            <button
                @click="scroll('left')"
                class="absolute left-2 top-1/2 -translate-y-1/2 z-10 bg-black/60 p-2 rounded-full md:hidden"
            >
                <LuChevronLeft class="w-6 h-6 text-white" />
            </button>

            <!-- Scrollable container -->
            <div
                ref="scrollRef"
                class="flex gap-5 overflow-x-auto scrollbar-hide scroll-smooth"
            >
                <div
                    v-for="(pack, index) in packages[activeCategory]"
                    :key="index"
                    class="flex-shrink-0 snap-center p-[2.4px] rounded-xl bg-gradient-to-b w-60"
                    :class="pack.color"
                >
                    <div
                        class="flex flex-col h-full rounded-xl shadow-lg bg-white flex-1"
                    >
                        <div
                            class="p-5 rounded-t-xl text-center"
                            :class="pack.color"
                        >
                            <h3 class="font-bold text-lg text-black mb-3">
                                {{ pack.title }}
                            </h3>
                            <p class="text-[11px] text-gray-800 font-normal">
                                <span class="text-xl font-semibold">8x</span>
                                {{ pack.sessions }}
                            </p>
                            <p class="text-2xl font-bold text-blue-800 my-2">
                                {{ pack.price }}
                            </p>
                            <p
                                class="text-[11px] text-danger mb-4 font-semibold flex"
                            >
                                <IoWarningOutline class="w-4 h-4 mr-1" />{{
                                    pack.notes
                                }}
                            </p>
                        </div>

                        <div class="px-1 flex-1">
                            <ul
                                class="text-sm text-gray-800 space-y-2 flex-1 bg-white px-6 py-4"
                            >
                                <li
                                    v-for="(f, idx) in pack.features"
                                    :key="idx"
                                    class="flex items-center gap-2"
                                >
                                    <IoCheckmarkCircle
                                        class="w-4 h-4 text-green-500"
                                    />
                                    <span>{{ f }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <button
                                class="mt-auto font-bold shadow tracking-wider text-white w-full py-2 rounded-lg transition-transform duration-300 transform hover:scale-105 hover:shadow-lg hover:opacity-90"
                                :class="pack.color"
                            >
                                Pilih Paket Ini
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol kanan mobile -->
            <button
                @click="scroll('right')"
                class="absolute right-2 top-1/2 -translate-y-1/2 z-10 bg-black/60 p-2 rounded-full md:hidden"
            >
                <LuChevronRight class="w-6 h-6 text-white" />
            </button>

            <!-- Tombol Desktop bawah -->
            <div class="hidden md:flex justify-center gap-4 mt-6">
                <button
                    @click="scroll('left')"
                    class="bg-secondary text-white px-2 py-2 rounded-full shadow hover:bg-gray-800"
                >
                    <LuChevronLeft class="w-6 h-6 text-white" />
                </button>
                <button
                    @click="scroll('right')"
                    class="bg-secondary text-white px-2 py-2 rounded-full shadow hover:bg-gray-800"
                >
                    <LuChevronRight class="w-6 h-6 text-white" />
                </button>
            </div>
        </div>
    </section>
</template>

<style>
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
