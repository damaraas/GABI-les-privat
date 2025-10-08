<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";
const phone = "6285712230349";
</script>

<template>
    <div class="max-w-4xl mx-auto px-4 py-2 pb-12">
        <div class="space-y-4 bg-primary rounded-3xl p-8">
            <!-- WhatsApp Button -->
            <div class="max-w-4xl mx-auto px-4">
                <div class="text-center">
                    <a href="https://wa.me/6285712230349?text=Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu?"
                        target="_blank"
                        class="items-center gap-3 bg-green text-white font-bold text-lg md:text-xl px-6 py-4 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl inline-flex  border-white border-2">
                        <SiWhatsapp class="w-8 h-8" />
                        DAFTAR SEKARANG!
                    </a>
                </div>
            </div>

            <!-- Lightbulb Character -->
                <div class="relative flex justify-center items-center ">
                    <!-- Circle Background -->
                    <div
                        class="absolute z-0 rounded-full bg-sky-600 w-52 h-52 sm:w-56 sm:h-56 md:w-64 md:h-64 lg:w-80 lg:h-80"
                    ></div>

                    <!-- Maskot Image -->
                    <img
                        :src="'/img/maskot/maskot-cta-1.webp'"
                        alt="Lightbulb Character"
                        class="relative z-10 w-72 sm:w-60 md:w-72 lg:w-[440px] h-auto"
                    />
                </div>
        </div>
    </div>
</template>