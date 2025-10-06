<script setup>
import { SiWhatsapp } from "vue-icons-plus/si";

const phone = "6285712230349";
const message = "Halo MinBi! Saya mau tanya info mengenai les privat di GABI. Bisa dibantu? 😊";
const waLink = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;

console.log(waLink);
</script>

<template>
    <a :href="waLink" target="_blank" rel="noopener noreferrer" class="fixed bottom-8 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 flex items-center justify-center z-50">
        <SiWhatsapp class="w-8 h-8" />
    </a>
</template>
