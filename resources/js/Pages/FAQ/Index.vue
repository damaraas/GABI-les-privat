<script setup>

import AppLayout from '../../Layouts/AppLayout.vue'
import Header from './Components/Header.vue';
import FAQ from './Components/FAQ.vue';
import CTA from './Components/CTA.vue';
import { Head } from '@inertiajs/vue3';

</script>


<template>

  <Head>
    <title>FAQ dan Bantuan</title>
    <meta name="title" content="FAQ dan Bantuan" />
    <meta name="description"
      content="Temukan jawaban atas pertanyaan umum, dan informasi lengkap lainnya. Hubungi kami via WhatsApp!" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="Indonesian" />
    <meta name="author" content="GABI-LesPrivat" />
    <link rel="canonical" href="/faq-bantuan" />
  </Head>
  <AppLayout>
    <div class="min-h-screen">
      <!-- Header Section -->
      <section id="header" class="bg-primary">
        <Header />
      </section>

      <div class="bg-secondary">

        <!-- FAQ Section -->
        <section id="faq">
          <FAQ />
        </section>

        <!-- CTA Section -->
        <section id="cta">
          <CTA />
        </section>

      </div>
    </div>
  </AppLayout>
</template>
