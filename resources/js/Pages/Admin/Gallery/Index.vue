<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm, router } from '@inertiajs/vue3';
import { ref } from 'vue';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';

const props = defineProps({
    title: String,
    photos: Array,
});

// Form untuk upload foto baru
const form = useForm({
    photo: null,
    caption: '',
});

const submit = () => {
    form.post(route('admin.gallery.store'), {
        onSuccess: () => form.reset('photo', 'caption'),
    });
};

// Logika untuk modal konfirmasi hapus
const showConfirmModal = ref(false);
const photoToDelete = ref(null);

const openConfirmModal = (id) => {
    photoToDelete.value = id;
    showConfirmModal.value = true;
};

const closeConfirmModal = () => {
    showConfirmModal.value = false;
    photoToDelete.value = null;
};

const destroy = () => {
    if (photoToDelete.value) {
        router.delete(route('admin.gallery.destroy', photoToDelete.value), {
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

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Unggah Foto Baru</h2>
                <form @submit.prevent="submit">
                    <div class="mb-4">
                        <label for="photo" class="block mb-2 text-sm font-medium text-gray-900">Pilih Foto</label>
                        <input type="file" @input="form.photo = $event.target.files[0]" accept="image/*"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            required />
                        <progress v-if="form.progress" :value="form.progress.percentage" max="100"
                            class="w-full mt-2"></progress>
                        <div v-if="form.errors.photo" class="text-red-500 text-sm mt-1">{{ form.errors.photo }}</div>
                    </div>
                    <div class="mb-4">
                        <label for="caption" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi
                            (Opsional)</label>
                        <input type="text" v-model="form.caption"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5">
                    </div>
                    <button type="submit" :disabled="form.processing"
                        class="text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Unggah
                    </button>
                </form>
            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold text-green-800 mb-4">Daftar Foto</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    <div v-for="photo in photos" :key="photo.id" class="relative group">
                        <img :src="`/storage/${photo.path}`" class="w-full h-32 object-cover rounded-lg">
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                            <button @click="openConfirmModal(photo.id)" class="text-white text-2xl">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <p v-if="photos.length === 0" class="text-gray-500 mt-4">Belum ada foto yang diunggah.</p>
            </div>
        </div>

        <ConfirmationModal :show="showConfirmModal" title="Hapus Foto"
            message="Apakah Anda yakin ingin menghapus foto ini?" @confirm="destroy" @close="closeConfirmModal" />
    </AuthenticatedLayout>
</template>