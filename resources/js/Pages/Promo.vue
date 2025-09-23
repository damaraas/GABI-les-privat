<template>
    <AppLayout>
        <div class="container mx-auto px-4 py-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Promo Spesial</h1>
                <p class="text-xl text-gray-600">Dapatkan diskon hingga 50% untuk semua kelas</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg p-8 text-white">
                    <h2 class="text-2xl font-bold mb-4">Promo Weekend</h2>
                    <p class="mb-4">Diskon 30% untuk semua kelas programming</p>
                    <div class="text-3xl font-bold mb-4">30% OFF</div>
                    <button
                        class="bg-white text-purple-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Ambil Promo
                    </button>
                </div>

                <div class="bg-gradient-to-r from-green-500 to-teal-600 rounded-lg p-8 text-white">
                    <h2 class="text-2xl font-bold mb-4">Trial Gratis</h2>
                    <p class="mb-4">Coba gratis 7 hari tanpa komitmen</p>
                    <div class="text-3xl font-bold mb-4">FREE</div>
                    <button
                        class="bg-white text-teal-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                        Mulai Trial
                    </button>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script setup>
import AppLayout from '../Layouts/AppLayout.vue'

</script>