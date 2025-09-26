<script setup>
import { ref } from "vue";
import { Fa6Whatsapp } from "vue-icons-plus/fa6";

// Props
const props = defineProps({
    whatsappNumber: {
        type: String,
        default: "6281234567890",
    },
    faqItems: {
        type: Array,
        default: () => [],
    },
});

// Reactive data
const openFaq = ref(null);

// Default FAQ data
const faqData =
    props.faqItems.length > 0
        ? props.faqItems
        : [
              {
                  question: "Apa bedanya GABI dengan Bimbel Reguler?",
                  answer: "GABI lebih fleksibel karena menyesuaikan jadwal dan kebutuhan belajar tiap siswa, sementara bimbel reguler biasanya terikat jadwal kelas.",
              },
              {
                  question: "Apakah ada kelas online selain tatap muka?",
                  answer: "Ada. GABI menyediakan kelas online interaktif yang tetap seru dan mudah dipahami, lengkap dengan materi digital.",
              },
              {
                  question:
                      "Fasilitas apa aja yang didapat kalau jadi siswa di GABI?",
                  answer: "Sebagai siswa di GABI, kamu akan mendapatkan berbagai pilihan les privat secara tatap muka di rumah atau online, modul belajar yang disesuaikan dengan jenjang dan materi sekolah, hingga evaluasi rutin dari guru untuk memantau perkembangan. Selain itu, kamu juga akan mendapatkan laporan belajar secara berkala dan akses ke berbagai referensi tambahan seperti video pembelajaran, worksheet, atau materi interaktif lainnya. Semuanya dirancang agar belajar jadi lebih fleksibel, menyenangkan, dan tetap fokus pada kebutuhan masing-masing siswa.",
              },
          ];

// Methods
const toggleFaq = (index) => {
    openFaq.value = openFaq.value === index ? null : index;
};
</script>

<template>
    <section>
        <div class="max-w-full mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-start">
                <!-- Left Side - Title and Character -->
                <div
                    class="flex flex-col items-center lg:items-center justify-center bg-secondary py-8 px-6"
                >
                    <!-- Title -->
                    <div
                        class="mb-1 lg:text-left flex flex-row items-center text-right lg:items-start gap-4 lg:px-8 px-0"
                    >
                        <!-- Heading -->
                        <h2
                            class="text-5xl md:text-7xl lg:text-7xl font-black text-black mb-0"
                        >
                            FAQ
                        </h2>

                        <!-- Paragraph -->
                        <p
                            class="text-lg md:text-2xl text-black font-semibold mb-0 text-center lg:text-left"
                        >
                            Frequently<br />
                            Asked Questions
                        </p>
                    </div>

                    <!-- Character Book (Gambar di tengah) -->
                    <div
                        class="relative mb-0 flex justify-center items-center w-full"
                    >
                        <!-- Background Circle -->
                        <div
                            class="absolute z-0 rounded-full bg-gradient-to-r from-yellow-500 to-yellow-400 opacity-30 w-64 h-64 sm:w-52 sm:h-52 md:w-60 md:h-60 lg:w-72 lg:h-72"
                        ></div>

                        <!-- Gambar -->
                        <img
                            :src="'/img/maskot/Maskot-Buku.webp'"
                            alt="Character Image"
                            class="relative z-10 w-[300px] h-80 sm:w-48 sm:h-52 md:w-52 md:h-60 lg:w-96 lg:h-96 rounded-lg overflow-hidden"
                        />
                    </div>

                    <!-- CTA Button (Tengah) -->
                    <div
                        class="lg:flex justify-center items-center hidden"
                    >
                        <a :href="'https://wa.me/' + whatsappNumber" target="_blank"
                            class="inline-flex items-center gap-3 bg-green text-white font-bold text-lg px-10 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg justify-center border-white border-2"
                        >
                            <Fa6Whatsapp class="w-10 h-10" />
                            <div>
                                Baca Selengkapnya<br />
                                <p class="text-sm opacity-90">FAQ Expandable</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Right Side - FAQ Accordion -->
                <div class="space-y-4 lg:py-8 py-0 px-6 bg-[#fdd636] lg:bg-white">
                    <div
                        v-for="(faq, index) in faqData"
                        :key="index"
                        class="bg-white rounded-2xl shadow-lg overflow-hidden transition-all duration-300"
                    >
                        <!-- Question Header -->
                        <button
                            @click="toggleFaq(index)"
                            class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50 lg:bg-[#fdd636] hover:bg-yellow-400 transition-colors duration-200 bg-white"
                        >
                            <div class="flex items-center justify-between">
                                <h3
                                    class="text-lg md:text-xl font-bold bg-secondar pr-4"
                                >
                                    {{ faq.question }}
                                </h3>
                                <div class="flex-shrink-0 lg:bg-white bg-[#fdd636] rounded-full px-1 py-1">
                                    <svg
                                        :class="{
                                            'rotate-180': openFaq === index,
                                        }"
                                        class="w-5 h-5 text-black transition-transform duration-300"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </button>

                        <!-- Answer Content -->
                        <div
                            :class="{
                                'max-h-96 pb-4': openFaq === index,
                                'max-h-0': openFaq !== index,
                            }"
                            class="px-6 overflow-hidden transition-all duration-300 ease-in-out bg-white"
                        >
                            <div class="text-black leading-relaxed pt-4">
                                {{ faq.answer }}
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-center items-center mt-10 mb-10 lg:hidden"
                    >
                        <a :href="'https://wa.me/' + whatsappNumber" target="_blank"
                            class="inline-flex items-center gap-3 bg-green text-white font-bold text-sm px-6 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg justify-center border-white border-2"
                        >
                            <Fa6Whatsapp class="w-8 h-8" />
                            <div>
                                Baca Selengkapnya<br />
                                <p class="text-sm opacity-90">FAQ Expandable</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>