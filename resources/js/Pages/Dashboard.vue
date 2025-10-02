<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

// Definisikan props title yang akan dikirim dari controller
defineProps({
    title: String,
});
</script>

<template>

    <Head :title="title" />

    <AuthenticatedLayout>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">Selamat datang di dasbor admin!</div>
        </div>

        <div class="mt-6 bg-white p-6 rounded-lg shadow-sm">
            <h3 class="text-lg font-semibold mb-4">Langkah Selanjutnya</h3>
            <p>Dari sini, Anda bisa mulai mengelola konten website. Silakan pilih menu di sidebar sebelah kiri.</p>
        </div>
    </AuthenticatedLayout>
</template>