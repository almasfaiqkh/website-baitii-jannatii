<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';

defineProps({
    title: String,
    articles: Object,
});
</script>

<template>

    <Head :title="title" />
    <PublicLayout>
        <section class="bg-green-700 text-white py-12">
            <div class="container mx-auto text-center px-6">
                <h1 class="text-4xl font-bold">Berita & Kegiatan</h1>
                <p class="mt-2 text-lg text-green-100">Ikuti perkembangan dan cerita terbaru dari Panti Asuhan Baitii
                    Jannatii.</p>
            </div>
        </section>

        <section class="py-16 bg-gray-50" data-aos="fade-up">
            <div class="container mx-auto px-6">
                <div v-if="articles.data.length > 0" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div v-for="article in articles.data" :key="article.id"
                        class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col" data-aos="fade-up">
                        <img v-if="article.image" :src="`/storage/${article.image}`" alt="Gambar Artikel"
                            class="w-full h-56 object-cover">
                        <div class="p-6 flex flex-col flex-grow">
                            <h2 class="text-xl font-bold text-green-800 mb-2">{{ article.title }}</h2>
                            <p class="text-sm text-gray-500 mb-4">Oleh {{ article.user.name }} - {{ new
                                Date(article.created_at).toLocaleDateString('id-ID') }}</p>
                            <p class="text-gray-700 leading-relaxed flex-grow">{{ article.content.substring(0, 120)
                                }}...</p>
                            <Link :href="route('articles.show', article.id)"
                                class="mt-4 self-start text-green-500 font-semibold hover:underline">
                            Baca Selengkapnya &rarr;
                            </Link>
                        </div>
                    </div>
                </div>
                <p v-else class="text-center text-gray-500">Belum ada artikel yang dipublikasikan.</p>
            </div>
        </section>
    </PublicLayout>
</template>