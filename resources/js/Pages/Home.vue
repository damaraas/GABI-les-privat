<template>
  <AppLayout>
    <section class="bg-gray-100 py-20 text-center">
      <h1 class="text-4xl font-bold mb-4">Selamat Datang di Gatraco Bimble 🚀</h1>
      <p class="text-lg text-gray-700 mb-6">
        Platform ini dibuat dengan Laravel 12 + Inertia + Vue 3 + Tailwind.
      </p>
      <a href="#features"
         class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
        Jelajahi Fitur
      </a>
    </section>

    <section id="features" class="py-16 px-6">
      <h2 class="text-2xl font-bold text-center mb-10">Fitur Utama</h2>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="p-6 bg-white rounded-lg shadow">
          <h3 class="text-lg font-semibold mb-2">Cepat</h3>
          <p>Performa tinggi dengan Laravel & Vue.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
          <h3 class="text-lg font-semibold mb-2">Responsif</h3>
          <p>Didesain mobile-first dengan Tailwind.</p>
        </div>
        <div class="p-6 bg-white rounded-lg shadow">
          <h3 class="text-lg font-semibold mb-2">Mudah</h3>
          <p>Integrasi Inertia memudahkan routing & SPA.</p>
        </div>
      </div>
    </section>

    <section id="contact" class="py-16 bg-blue-50 text-center">
      <h2 class="text-2xl font-bold mb-4">Kontak Kami</h2>
      <p class="text-gray-700">Email: support@myapp.test</p>
    </section>
  </AppLayout>
</template>

<script>
import AppLayout from "../Layouts/AppLayout.vue";

export default {
  name: "Home",
  components: { AppLayout },
};
</script>
