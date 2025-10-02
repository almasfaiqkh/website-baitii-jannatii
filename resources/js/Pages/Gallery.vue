<script setup>
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import PublicLayout from '@/Layouts/PublicLayout.vue';

// TERIMA PROPS 'PHOTOS' DARI CONTROLLER
const props = defineProps({
    photos: Array,
});

// State untuk menyimpan gambar yang sedang dipilih untuk lightbox
const selectedImage = ref(null);

// Fungsi untuk membuka lightbox
const openImage = (src) => {
    selectedImage.value = src;
};

// Fungsi untuk menutup lightbox
const closeImage = () => {
    selectedImage.value = null;
};
</script>

<template>

    <Head title="Galeri" />

    <PublicLayout>
        <section class="bg-green-600 text-white py-12">
            <div class="container mx-auto text-center px-6">
                <h1 class="text-4xl font-bold">Galeri Kegiatan Kami</h1>
                <p class="mt-2 text-lg text-green-100">Momen-momen kebersamaan dan pertumbuhan di Baitii Jannatii.</p>
            </div>
        </section>

        <section class="py-16 bg-white" data-aos="fade-up">
            <div class="container mx-auto px-6">

                <div v-if="photos.length > 0" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div v-for="photo in photos" :key="photo.id" @click="openImage(`/storage/${photo.path}`)"
                        class="cursor-pointer overflow-hidden rounded-lg shadow-lg group">
                        <img :src="`/storage/${photo.path}`" :alt="photo.caption"
                            class="w-full h-64 object-cover transition-transform duration-300 transform group-hover:scale-110">
                    </div>
                </div>

                <div v-else class="text-center py-16">
                    <i class="fas fa-camera text-6xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500 text-xl">
                        Belum ada foto di galeri saat ini.
                    </p>
                </div>

            </div>
        </section>

        <div v-if="selectedImage" @click="closeImage"
            class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50 p-4">
            <img :src="selectedImage" alt="Tampilan besar" class="max-w-full max-h-full rounded-lg shadow-xl">
            <button @click="closeImage" class="absolute top-4 right-4 text-white text-3xl font-bold">&times;</button>
        </div>

    </PublicLayout>
</template>