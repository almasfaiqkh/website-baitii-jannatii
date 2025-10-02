<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
import { onMounted } from 'vue';
import { CountUp } from 'countup.js';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});

// Logika untuk animasi hitung naik
onMounted(() => {
    const options = {
        enableScrollSpy: true, // Mulai animasi saat elemen terlihat di layar
        scrollSpyDelay: 100,
    };

    // Inisialisasi CountUp untuk setiap elemen berdasarkan ID-nya
    new CountUp('anak-asuh-count', 35, { ...options, suffix: '+' }).start();
    new CountUp('program-aktif-count', 5, options).start();
    new CountUp('dukungan-donatur-count', 100, { ...options, suffix: '%' }).start();
});
</script>

<template>

    <Head title="Beranda" />

    <PublicLayout>
        <section class="relative h-[80vh] bg-cover bg-center flex items-center justify-center text-white"
            style="background-image: url('/images/hero_children.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 text-center px-4">

                <h1 class="text-5xl md:text-6xl font-extrabold mb-4" data-aos="fade-down">
                    Membentuk Masa Depan Cerah
                </h1>

                <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Memberikan rumah yang aman, pendidikan berkualitas, dan harapan untuk setiap mimpi.
                </p>

                <div data-aos="fade-up" data-aos-delay="400">
                    <Link :href="route('donate')"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full text-lg shadow-xl transition-transform transform hover:scale-105">
                    Dukung Kami
                    </Link>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

                <div data-aos="fade-right">
                    <p class="text-green-500 font-semibold mb-2">SELAMAT DATANG DI BAITII JANNATII</p>
                    <h2 class="text-4xl font-bold text-green-800 mb-6">Rumah Aman Penuh Harapan dan Kasih Sayang</h2>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Panti Asuhan Baitii Jannatii adalah rumah aman yang didedikasikan untuk merawat, mendidik, dan
                        membimbing anak-anak yatim piatu dan dhuafa. Kami percaya setiap anak berhak mendapatkan
                        kesempatan yang sama.
                    </p>
                    <Link :href="route('about')"
                        class="mt-8 inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-full shadow-md transition-colors duration-300">
                    Cerita Kami Selengkapnya
                    </Link>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                    <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="100">
                        <i class="fas fa-users text-5xl text-green-500 mb-4"></i>
                        <h3 id="anak-asuh-count" class="text-4xl font-bold text-green-800">0+</h3>
                        <p class="text-gray-600 mt-2">Anak Asuh</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="200">
                        <i class="fas fa-book-reader text-5xl text-green-500 mb-4"></i>
                        <h3 id="program-aktif-count" class="text-4xl font-bold text-green-800">0</h3>
                        <p class="text-gray-600 mt-2">Program Aktif</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-lg" data-aos="fade-up" data-aos-delay="300">
                        <i class="fas fa-hand-holding-heart text-5xl text-green-500 mb-4"></i>
                        <h3 id="dukungan-donatur-count" class="text-4xl font-bold text-green-800">0%</h3>
                        <p class="text-gray-600 mt-2">Dukungan Donatur</p>
                    </div>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
