<script setup>
import BlogLayout from "../../Layouts/BlogLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps({ posts: Array })
</script>

<template>
    <BlogLayout>
        <Head title="Blog GABI Les Privat" />

        <div class="m-10 font-onest">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-6">
            <div v-for="post in posts" :key="post.id" class="bg-white shadow rounded-xl p-5 hover:shadow-lg transition">
                <img v-if="post.thumbnail" :src="post.thumbnail" alt="thumbnail" class="w-full h-48 object-cover rounded-lg mb-4"/>
                <h2 class="text-xl font-semibold mb-2">{{ post.judul }}</h2>
                <p class="text-gray-700 text-sm mb-2 line-clamp-2">{{ post.konten }}</p>
                <a :href="`/blog/${post.slug}`" class="text-blue-800 text-sm font-medium hover:underline">
                    Baca selengkapnya →
                </a>
                <p class="flex justify-left text-gray-400 text-sm mb-2">{{ post.tanggal }}</p>
            </div>
        </div>
        </div>
    </BlogLayout>
</template>