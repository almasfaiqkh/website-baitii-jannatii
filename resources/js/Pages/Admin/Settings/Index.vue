<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';

const props = defineProps({
    title: String,
    settings: Object,
});

const form = useForm({
    visi: props.settings.visi || '',
    misi: props.settings.misi || '',
    alamat: props.settings.alamat || '',
    telepon: props.settings.telepon || '',
    whatsapp: props.settings.whatsapp || '',
    email: props.settings.email || '',
});

const submit = () => {
    form.put(route('admin.settings.update'));
};
</script>

<template>

    <Head :title="title" />

    <AuthenticatedLayout>
        <div v-if="$page.props.flash && $page.props.flash.success"
            class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ $page.props.flash.success }}</span>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 md:p-8 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold text-green-800 mb-6">Pengaturan Website</h2>
                <form @submit.prevent="submit">
                    <div class="mb-6">
                        <label for="visi" class="block mb-2 text-sm font-medium text-gray-900">Visi</label>
                        <textarea id="visi" rows="4" v-model="form.visi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="misi" class="block mb-2 text-sm font-medium text-gray-900">Misi</label>
                        <textarea id="misi" rows="6" v-model="form.misi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5"></textarea>
                    </div>
                    <div class="mb-6">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <textarea id="alamat" rows="3" v-model="form.alamat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5"></textarea>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="mb-6">
                            <label for="telepon" class="block mb-2 text-sm font-medium text-gray-900">Telepon</label>
                            <input type="text" id="telepon" v-model="form.telepon"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5">
                        </div>
                        <div class="mb-6">
                            <label for="whatsapp" class="block mb-2 text-sm font-medium text-gray-900">WhatsApp</label>
                            <input type="text" id="whatsapp" v-model="form.whatsapp"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" v-model="form.email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-400 focus:border-green-400 block w-full p-2.5">
                    </div>

                    <button type="submit" :disabled="form.processing"
                        class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center disabled:opacity-50">
                        Simpan Perubahan
                    </button>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>