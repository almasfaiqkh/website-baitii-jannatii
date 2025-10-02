<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';

// Menggunakan form helper dari Inertia.js untuk mengelola state form
const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: '',
});

// Fungsi untuk submit form
const submit = () => {
    form.post(route('contact.store'), {
        onSuccess: () => form.reset(), // Reset form jika berhasil
    });
};
</script>

<template>

    <Head title="Kontak Kami" />

    <PublicLayout>
        <section class="bg-green-600 text-white py-12">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold">Hubungi Kami</h1>
                <p class="mt-2 text-lg text-green-100">Kami senang mendengar dari Anda. Jangan ragu untuk bertanya atau
                    berkunjung.</p>
            </div>
        </section>

        <section class="py-16 bg-white" data-aos="fade-up">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Informasi Kontak</h2>
                    <div class="space-y-6 text-lg">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-2xl text-green-500 w-8 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Alamat</h4>
                                <p class="text-gray-700">{{ $page.props.settings.alamat }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-phone text-2xl text-green-500 w-8 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Telepon</h4>
                                <a :href="`tel:${$page.props.settings.telepon}`"
                                    class="text-gray-700 hover:text-green-500">{{ $page.props.settings.telepon }}</a>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fab fa-whatsapp text-2xl text-green-500 w-8 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">WhatsApp</h4>
                                <a :href="`https://wa.me/62${$page.props.settings.whatsapp.substring(1)}`"
                                    target="_blank" class="text-gray-700 hover:text-green-500">{{
                                        $page.props.settings.whatsapp }}</a>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-2xl text-green-500 w-8 mt-1"></i>
                            <div>
                                <h4 class="font-semibold">Email</h4>
                                <a :href="`mailto:${$page.props.settings.email}`"
                                    class="text-gray-700 hover:text-green-500">{{ $page.props.settings.email }}</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-green-800 mb-6">Kirim Pesan</h2>
                    <div v-if="$page.props.flash && $page.props.flash.success"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                        role="alert">
                        <span class="block sm:inline">{{ $page.props.flash.success }}</span>
                    </div>
                    <form @submit.prevent="submit">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Anda</label>
                            <input type="text" id="name" v-model="form.name"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email Anda</label>
                            <input type="email" id="email" v-model="form.email"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-gray-700 font-semibold mb-2">Subjek</label>
                            <input type="text" id="subject" v-model="form.subject"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                            <textarea id="message" v-model="form.message" rows="5"
                                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400"
                                required></textarea>
                        </div>
                        <button type="submit" :disabled="form.processing"
                            class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-full shadow-lg transition-transform transform hover:scale-105 disabled:opacity-50">
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="w-full h-[50vh]" data-aos="fade-up" data-aos-delay="200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3470817218717!2d109.25192197594477!3d-7.426788292583849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f3476ed2fef%3A0xd648aeb004938297!2sRumah%20Asuhan%20Baitii%20Jannatii!5e0!3m2!1sen!2sid!4v1757470476251!5m2!1sen!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>
    </PublicLayout>
</template>
