<script setup>
import BlogLayout from "../../Layouts/BlogLayout.vue";
import { Head } from "@inertiajs/vue3";

const props = defineProps({
  post: Object
})
</script>

<template>
    <BlogLayout>
        <Head :title="post.judul" />

        <div class="lg:m-10 m-5 font-onest">
            <section class="max-w-4xl mx-auto p-6">
                <!-- Breadcrumb -->
                <nav class="text-sm mb-4">
                    <a href="/blog" class="text-[#11B2F7] hover:underline">Beranda</a>
                    <span class="mx-2">/</span>
                    <span class="text-gray-600">{{ post.judul }}</span>
                </nav>

                <!-- Hero -->
                <header class="mb-6">
                    <h1 class="text-3xl font-bold leading-tight lg:text-justify text-center">{{ post.judul }}</h1>
                </header>

                <!-- Konten -->
                <div v-html="post.konten" class="prose prose-lg mx-auto text-justify"></div>
            </section>
        </div>
    </BlogLayout>
</template>