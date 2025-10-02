<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';

const props = defineProps({
    title: String,
    articles: Object,
});

const showConfirmModal = ref(false);
const articleToDelete = ref(null);

const openConfirmModal = (id) => {
    articleToDelete.value = id;
    showConfirmModal.value = true;
};

const closeConfirmModal = () => {
    showConfirmModal.value = false;
    articleToDelete.value = null;
};

const destroy = () => {
    if (articleToDelete.value) {
        router.delete(route('admin.articles.destroy', articleToDelete.value), {
            onFinish: () => closeConfirmModal(),
        });
    }
};
</script>

<template>

    <Head :title="title" />

    <AuthenticatedLayout>
        <div v-if="$page.props.flash && $page.props.flash.success"
            class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
            {{ $page.props.flash.success }}
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-green-800">Daftar Artikel</h2>
                    <Link :href="route('admin.articles.create')"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg">
                    Tulis Artikel Baru
                    </Link>
                </div>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b text-left">Judul</th>
                            <th class="py-2 px-4 border-b text-left">Penulis</th>
                            <th class="py-2 px-4 border-b text-left">Tanggal</th>
                            <th class="py-2 px-4 border-b text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="article in articles.data" :key="article.id">
                            <td class="py-2 px-4 border-b">{{ article.title }}</td>
                            <td class="py-2 px-4 border-b">{{ article.user.name }}</td>
                            <td class="py-2 px-4 border-b">{{ new Date(article.created_at).toLocaleDateString('id-ID')
                            }}</td>
                            <td class="py-2 px-4 border-b space-x-4">
                                <Link :href="route('admin.articles.edit', article.id)"
                                    class="text-green-500 hover:underline">Edit</Link>
                                <button @click="openConfirmModal(article.id)"
                                    class="text-red-600 hover:underline">Hapus</button>

                                <ConfirmationModal :show="showConfirmModal" title="Hapus Artikel"
                                    message="Apakah Anda yakin ingin menghapus artikel ini? Data akan hilang permanen."
                                    @confirm="destroy" @close="closeConfirmModal" />
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p v-if="articles.data.length === 0" class="text-gray-500 mt-4">Belum ada artikel yang dipublikasikan.
                </p>
            </div>
        </div>
    </AuthenticatedLayout>
</template>