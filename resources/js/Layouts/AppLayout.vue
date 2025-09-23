<template>
  <div class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <Navbar />
    
    <!-- Content -->
    <main class="flex-1">
      <slot />
    </main>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<script>
import Navbar from "../Components/Navbar.vue";
import Footer from "../Components/Footer.vue";

export default {
  components: {
    Navbar,  // Pastikan Navbar didaftarkan
    Footer   // Pastikan Footer didaftarkan
  }
}
</script>
