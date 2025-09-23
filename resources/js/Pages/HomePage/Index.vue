<script setup >

import AppLayout from '../../Layouts/AppLayout.vue'
import Cta from './Components/cta.vue';
import Faq from './Components/Faq.vue';
import Hero from './Components/Hero.vue';
import Keunggulan from './Components/Keunggulan.vue';
import Layanan from './Components/Layanan.vue';
import Testimoni from './Components/Testimoni.vue';

</script>
<template>
  <AppLayout>
    <section>
       <Hero />
    </section>

    <section >
        <Keunggulan />
    </section>

    <section >
        <Layanan />
    </section>

    <section >
        <Testimoni/>
    </section>

    <section>
        <Cta />
    </section>

    <section>
        <Faq />
    </section>

  </AppLayout>
</template>

