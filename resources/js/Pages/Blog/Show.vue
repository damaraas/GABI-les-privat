<script setup>
import AppLayout from "../../Layouts/AppLayout.vue";
import { Head } from "@inertiajs/vue3";
import Cta from "../HomePage/Components/Cta.vue";

const props = defineProps({
    blog: Object,
    meta: Object,
});
</script>

<template>
    <AppLayout>
        <Head>
            <title>{{ blog.title }}</title>
            <meta
                name="description"
                content="UTBK bukan cuma soal hafalan, tapi strategi! Pelajari cara jitu mengatur waktu, memahami pola soal, dan meningkatkan performa agar peluang lolos SNBT makin besar."
            />
            <meta
                name="keywords"
                content="persiapan UTBK SNBT, belajar UTBK efektif, tips lolos UTBK SNBT"
            />
        </Head>

        <!-- Breadcrumb -->
        <section
            class="max-w-4xl mx-auto text-justify leading-relaxed text-black px-4 sm:px-6 md:px-0 mt-10"
        >
            <nav class="text-sm mb-4">
                <a href="/blog" class="text-[#11B2F7] hover:underline"
                    >Beranda</a
                >
                <span class="mx-2">/</span>
                <span class="text-gray-600">{{ blog.title }}</span>
            </nav>

            <!-- Hero -->
            <!-- <header class="mb-6">
                <h1 class="text-3xl font-bold leading-tight text-center">
                    {{ blog.title }}
                </h1>
                <p class="text-gray-600 mt-2">Temukan metode membaca untuk anak SMA agar lebih efisien dan tidak cepat bosan.</p>
            </header> -->
        </section>

        <section
            class="max-w-4xl mx-auto text-justify leading-relaxed text-black px-4 sm:px-6 md:px-0 mt-10"
        >
            <div v-html="blog.content" class="prose prose-lg max-w-none"></div>
        </section>

        <section>
            <Cta />
        </section>
    </AppLayout>
</template>
