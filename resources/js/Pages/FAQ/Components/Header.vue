<script setup>
</script>

<template>
    <div class="bg-sky-400 pt-12 pb-8 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-white text-3xl md:text-4xl font-bold mb-4">FAQ dan Bantuan</h1>

            <!-- Icon -->
            <div class="relative flex justify-center items-center w-full mt-8 mb-10">
                <!-- Background Circle -->
                <div
                    class="absolute z-0 rounded-full bg-white w-52 h-52 sm:w-44 sm:h-44 md:w-48 md:h-48 lg:w-56 lg:h-56">
                </div>

                <!-- Gambar -->
                <img :src="'/img/maskot/maskot-buku-faq.webp'" alt="Character Image"
                    class="relative z-10 w-[200px] h-[200px] sm:w-36 sm:h-40 md:w-44 md:h-48 lg:w-56 lg:h-56 rounded-lg overflow-hidden ml-4" />
            </div>

            <div
                class="inline-block bg-sky-600 text-white px-6 py-2 text-lg rounded-lg font-bold border-white border-2">
                Frequently Asked Questions
            </div>
        </div>
    </div>
</template>