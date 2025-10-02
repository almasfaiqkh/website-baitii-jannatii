<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const props = defineProps({
    title: String,
    article: Object, // Menerima data artikel yang akan diedit
});

const form = useForm({
    _method: 'PUT', // Method spoofing untuk update
    title: props.article.title,
    content: props.article.content,
    image: null, // Dikosongkan, hanya diisi jika ada gambar baru
});

const submit = () => {
    // Gunakan method POST untuk mengirim file, Inertia akan menanganinya sebagai PUT
    form.post(route('admin.articles.update', props.article.id));
};
</script>

<template>

    <Head :title="title" />

    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto bg-white p-6 md:p-8 rounded-lg shadow-sm">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-green-800">{{ title }}</h2>
                <Link :href="route('admin.articles.index')" class="text-gray-600 hover:text-gray-900">&larr; Kembali
                </Link>
            </div>

            <div class="mb-4" v-if="article.image">
                <p class="block mb-2 text-sm font-medium text-gray-900">Gambar Saat Ini:</p>
                <img :src="`/storage/${article.image}`" class="h-32 w-auto rounded-lg border p-1">
            </div>

            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Judul Artikel</label>
                    <input type="text" id="title" v-model="form.title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5"
                        required>
                    <div v-if="form.errors.title" class="text-red-500 text-sm mt-1">{{ form.errors.title }}</div>
                </div>
                <div class="mb-6">
                    <label for="content" class="block mb-2 text-sm font-medium text-gray-900">Isi Konten</label>
                    <textarea id="content" rows="10" v-model="form.content"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5"
                        required></textarea>
                    <div v-if="form.errors.content" class="text-red-500 text-sm mt-1">{{ form.errors.content }}</div>
                </div>
                <div class="mb-6">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Ganti Gambar Sampul
                        (Opsional)</label>
                    <input type="file" @input="form.image = $event.target.files[0]" accept="image/*"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" />
                    <progress v-if="form.progress" :value="form.progress.percentage" max="100"
                        class="w-full mt-2"></progress>
                    <div v-if="form.errors.image" class="text-red-500 text-sm mt-1">{{ form.errors.image }}</div>
                </div>
                <div class="flex items-center space-x-4">
                    <button type="submit" :disabled="form.processing"
                        class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center disabled:opacity-50">
                        Simpan Perubahan
                    </button>
                    <Link :href="route('admin.articles.index')" class="text-gray-600 hover:text-gray-900">Batal</Link>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>