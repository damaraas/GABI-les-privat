<script setup>
import BlogLayout from "../../Layouts/BlogLayout.vue";
import { Head } from "@inertiajs/vue3";
import { ref, computed } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({ posts: Array });

// Pagination
const perPage = 6;
const currentPage = ref(1);

const totalPages = computed(() => {
  return props.posts ? Math.ceil(props.posts.length / perPage) : 0;
});

const paginatedPosts = computed(() => {
  if (!props.posts) return [];
  const start = (currentPage.value - 1) * perPage;
  const end = start + perPage;
  return props.posts.slice(start, end);
});

const goToPage = (page) => {
  if (page >= 1 && page <= totalPages.value) {
    currentPage.value = page;
    window.scrollTo({ top: 0, behavior: "smooth" });
  }
};

// Fungsi untuk buang tag HTML dari content
const stripTags = (html) => {
  return html ? html.replace(/<[^>]*>/g, "").slice(0, 120) + "..." : "";
};
</script>

<template>
  <BlogLayout>
    <Head title="Blog GABI Les Privat" />

    <section class="bg-primary sm:py-30 py-15">
      <h1 class="text-center font-onest sm:text-4xl text-2xl font-bold">
        Artikel Terbaru Gabi Les Privat
      </h1>
    </section>

    <div class="m-10 font-onest">
      <div v-if="paginatedPosts.length" class="grid md:grid-cols-2 lg:grid-cols-3 grid-cols-1 gap-6">
        <div
          v-for="post in paginatedPosts"
          :key="post.id"
          class="bg-white shadow rounded-xl p-5 hover:shadow-lg transition"
        >
          <img
            v-if="post.thumbnail"
            :src="`/storage/${post.thumbnail}`"
            alt="thumbnail"
            class="w-full h-48 object-cover rounded-lg mb-4"
          />

          <h2 class="text-xl font-semibold mb-2">{{ post.title }}</h2>

          <p class="text-gray-700 text-sm mb-2 line-clamp-2">
            {{ stripTags(post.meta_description) }}
          </p>

          <a :href="`/blog/${post.slug}`" class="text-blue-800 text-sm font-medium hover:underline">
            Baca selengkapnya →
          </a>

          <p class="flex justify-left text-gray-400 text-sm mt-1">
            {{ new Date(post.published_at).toLocaleDateString("id-ID") }}
          </p>
        </div>
      </div>

      <div v-else class="text-center py-10 text-gray-500">Tidak ada artikel</div>

      <!-- Pagination -->
      <div v-if="totalPages > 1" class="flex justify-center mt-6 space-x-2">
        <button
          @click="goToPage(currentPage - 1)"
          :disabled="currentPage === 1"
          class="px-3 py-1 bg-gray-200 rounded disabled:opacity-50"
        >
          Prev
        </button>

        <button
          v-for="page in totalPages"
          :key="page"
          @click="goToPage(page)"
          :class="['px-3 py-1 rounded', currentPage === page ? 'bg-blue-600 text-white' : 'bg-gray-200']"
        >
          {{ page }}
        </button>

        <button
          @click="goToPage(currentPage + 1)"
          :disabled="currentPage === totalPages"
          class="px-3 py-1 bg-gray-200 rounded disabled:opacity-50"
        >
          Next
        </button>
      </div>
    </div>
  </BlogLayout>
</template>
