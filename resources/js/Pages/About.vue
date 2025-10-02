<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
</script>

<template>

    <Head title="Tentang Kami" />

    <PublicLayout>
        <section class="bg-green-600 text-white py-12">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold">Tentang Panti Asuhan Baitii Jannatii</h1>
                <p class="mt-2 text-lg text-green-100">Mengenal lebih dekat rumah harapan kami.</p>
            </div>
        </section>

        <section class="py-16 bg-white" data-aos="fade-up">
            <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="/images/foto-panti.jpg" alt="Gedung Panti Asuhan Baitii Jannatii"
                        class="rounded-lg shadow-2xl w-full">
                </div>
                <div class="text-lg">
                    <h2 class="text-3xl font-bold text-green-800 mb-4">Profil Singkat</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Panti Asuhan Baitii Jannatii merupakan salah satu lembaga sosial yang dikelola oleh (….) di
                        Purwokerto, Jawa Tengah. Panti asuhan ini bertujuan untuk memberikan perawatan, pendidikan, dan
                        bimbingan kepada anak-anak yatim piatu, terlantar, atau kurang mampu, dengan harapan agar mereka
                        dapat tumbuh dan berkembang menjadi individu yang mandiri serta berakhlak mulia.
                    </p>
                    <p class="mt-4 text-gray-700 leading-relaxed">
                        Panti asuhan ini tidak hanya berfokus pada aspek material, tetapi juga pada pengembangan
                        spiritual dan pendidikan anak-anak. Fasilitas yang disediakan mencakup tempat tinggal, makanan,
                        pendidikan formal, bimbingan agama, serta kegiatan ekstrakurikuler yang mendukung perkembangan
                        holistik anak-anak yang diasuh.
                    </p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50" data-aos="fade-up" data-aos-delay="200">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-green-800">Visi & Misi Kami</h2>
                    <p class="mt-2 text-gray-600">Landasan dan tujuan mulia dari setiap langkah yang kami ambil.</p>
                </div>
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold text-green-800 mb-4 flex items-center">
                            <i class="fas fa-eye mr-3 text-green-500"></i> Visi
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            {{ $page.props.settings.visi }}
                        </p>
                    </div>
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-semibold text-green-800 mb-4 flex items-center">
                            <i class="fas fa-bullseye mr-3 text-green-500"></i> Misi
                        </h3>
                        <p class="text-gray-700 leading-relaxed whitespace-pre-line">
                            {{ $page.props.settings.misi }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-white" data-aos="fade-up" data-aos-delay="200">
            <div class="container mx-auto text-center px-6">
                <h2 class="text-3xl font-bold text-green-800">Tertarik untuk Membantu?</h2>
                <p class="mt-4 text-lg text-gray-700 max-w-2xl mx-auto">Setiap dukungan, sekecil apapun, akan menjadi
                    cahaya bagi masa depan anak-anak kami.</p>
                <div class="mt-8">
                    <Link :href="route('donate')"
                        class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full text-lg shadow-lg transition-transform transform hover:scale-105">
                    Donasi Sekarang
                    </Link>
                </div>
            </div>
        </section>

    </PublicLayout>
</template>