<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';

defineProps({
    title: String,
    article: Object,
});
</script>
<template>

    <Head :title="title" />
    <PublicLayout>
        <div class="container mx-auto px-6 py-12 md:py-16 max-w-4xl" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-extrabold text-green-800 leading-tight mb-4">{{ article.title }}</h1>
            <p class="text-gray-500 mb-6">
                Ditulis oleh <span class="font-semibold">{{ article.user.name }}</span> pada {{ new
                    Date(article.created_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' })
                }}
            </p>
            <img v-if="article.image" :src="`/storage/${article.image}`" alt="Gambar Artikel"
                class="w-full rounded-lg shadow-lg mb-8">
            <div class="prose max-w-none text-lg text-gray-800 leading-relaxed whitespace-pre-line">
                {{ article.content }}
            </div>
            <div class="mt-12">
                <Link :href="route('articles.index')" class="text-green-500 font-semibold hover:underline">
                &larr; Kembali ke Daftar Artikel
                </Link>
            </div>
        </div>
    </PublicLayout>
</template>