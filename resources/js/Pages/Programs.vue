<script setup>
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
</script>

<template>

    <Head title="Program & Fasilitas" />

    <PublicLayout>
        <section class="bg-green-600 text-white py-12">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold">Program & Fasilitas</h1>
                <p class="mt-2 text-lg text-green-100">Mendukung tumbuh kembang anak secara holistik.</p>
            </div>
        </section>

        <section class="py-16 bg-white" data-aos="fade-up">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-green-800">Program Unggulan Kami</h2>
                    <p class="mt-2 text-gray-600">Fokus kami dalam membentuk generasi yang mandiri dan berakhlak.</p>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-book-open text-4xl text-green-500 mb-4"></i>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Pendidikan</h3>
                        <p class="text-gray-700">Program ini bertujuan untuk memastikan setiap anak mendapatkan
                            pendidikan yang cukup untuk bekal di masa depan nanti.</p>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-mosque text-4xl text-green-500 mb-4"></i>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Agama</h3>
                        <p class="text-gray-700">Mendukung perkembangan spiritual dan moral anak-anak sesuai dengan
                            keyakinan mereka, mencakup pelajaran agama.</p>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-heartbeat text-4xl text-green-500 mb-4"></i>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Kesehatan</h3>
                        <p class="text-gray-700">Dirancang untuk menjaga kesehatan fisik dan kebersihan anak-anak dengan
                            layanan kesehatan dasar dan pemeriksaan rutin.</p>
                    </div>
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-tools text-4xl text-green-500 mb-4"></i>
                        <h3 class="text-2xl font-semibold text-green-800 mb-3">Keterampilan</h3>
                        <p class="text-gray-700">Mengembangkan keterampilan dan bakat anak-anak melalui berbagai
                            kegiatan pelatihan dan workshop.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-gray-50" data-aos="fade-up" data-aos-delay="200">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-green-800">Fasilitas Penunjang</h2>
                    <p class="mt-2 text-gray-600">Menyediakan lingkungan yang nyaman dan kondusif untuk belajar dan
                        beristirahat.</p>
                </div>
                <div class="grid md:grid-cols-2 gap-x-12 gap-y-8">
                    <div class="flex items-start">
                        <i class="fas fa-bed text-3xl text-green-700 w-12 text-center"></i>
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-green-800">Asrama</h4>
                            <p class="text-gray-700 mt-1">Ruang istirahat yang nyaman dan layak untuk memastikan setiap
                                anak mendapatkan istirahat yang cukup.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-chalkboard-teacher text-3xl text-green-700 w-12 text-center"></i>
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-green-800">Ruang Belajar</h4>
                            <p class="text-gray-700 mt-1">Dilengkapi peralatan pendidikan untuk mendukung kegiatan
                                belajar dan mengerjakan tugas sekolah.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-utensils text-3xl text-green-700 w-12 text-center"></i>
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-green-800">Ruang Makan</h4>
                            <p class="text-gray-700 mt-1">Fasilitas ruang makan yang bersih dan rapi untuk menikmati
                                makanan bergizi tiga kali sehari.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-users text-3xl text-green-700 w-12 text-center"></i>
                        <div class="ml-4">
                            <h4 class="text-xl font-semibold text-green-800">Aula</h4>
                            <p class="text-gray-700 mt-1">Ruang serbaguna untuk berbagai kegiatan seperti rapat,
                                workshop, acara seni, dan kegiatan komunitas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </PublicLayout>
</template>