<script setup>
import { Head, Link } from '@inertiajs/vue3';
import PublicLayout from '@/Layouts/PublicLayout.vue';
</script>

<template>

    <Head title="Donasi" />

    <PublicLayout>
        <section class="bg-green-600 text-white py-12">
            <div class="container mx-auto text-center px-6">
                <h1 class="text-4xl font-bold">Dukung Masa Depan Mereka</h1>
                <p class="mt-2 text-lg text-green-100">Setiap donasi Anda adalah investasi untuk pendidikan, kesehatan,
                    dan kebahagiaan anak-anak kami.</p>
            </div>
        </section>

        <section class="py-16 bg-white" data-aos="fade-up">
            <div class="container mx-auto px-6 max-w-4xl">

                <div class="bg-white p-8 rounded-lg shadow-xl border border-gray-200 mb-12">
                    <h2 class="text-3xl font-bold text-green-800 mb-6 flex items-center">
                        <i class="fas fa-university mr-4 text-green-500"></i> Donasi via Transfer Bank
                    </h2>
                    <p class="text-gray-700 mb-6 text-lg">Anda dapat mengirimkan donasi langsung ke rekening resmi
                        yayasan kami. Ini adalah cara yang paling kami rekomendasikan.</p>

                    <div class="space-y-4">
                        <div class="flex items-center bg-gray-50 p-4 rounded-lg">
                            <img src="/images/bca-logo.png" alt="Logo BCA" class="h-8 w-auto object-contain mr-4">
                            <div>
                                <p class="font-bold text-lg text-gray-800">098-765-4321</p>
                                <p class="text-sm text-gray-600">a.n. Yayasan Baitii Jannatii</p>
                            </div>
                        </div>
                        <div class="flex items-center bg-gray-50 p-4 rounded-lg">
                            <img src="/images/mandiri-logo.png" alt="Logo Mandiri"
                                class="h-8 w-auto object-contain mr-4">
                            <div>
                                <p class="font-bold text-lg text-gray-800">123-456-7890</p>
                                <p class="text-sm text-gray-600">a.n. Yayasan Baitii Jannatii</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-lg shadow-xl border border-gray-200 mb-12">
                    <h2 class="text-3xl font-bold text-green-800 mb-6 flex items-center">
                        <i class="fas fa-box-open mr-4 text-green-500"></i> Donasi Barang
                    </h2>
                    <p class="text-gray-700 text-lg">Kami juga dengan senang hati menerima donasi dalam bentuk barang
                        seperti bahan makanan pokok, alat tulis, pakaian layak pakai, dan kebutuhan harian lainnya.
                        Silakan antarkan langsung ke alamat panti kami.</p>
                    <Link :href="route('contact')"
                        class="inline-block mt-4 text-green-500 font-semibold hover:underline">
                    Lihat Alamat & Peta <i class="fas fa-arrow-right ml-1"></i>
                    </Link>
                </div>

                <div class="bg-green-50 p-8 rounded-lg border-l-4 border-green-500">
                    <h2 class="text-3xl font-bold text-green-800 mb-6 flex items-center">
                        <i class="fab fa-whatsapp-square mr-4"></i> Langkah Terakhir: Konfirmasi
                    </h2>
                    <p class="text-gray-800 text-lg">Setelah melakukan transfer, mohon konfirmasi donasi Anda melalui
                        WhatsApp agar kami dapat mencatatnya dengan baik dan mendoakan Anda secara khusus.</p>
                    <a href="https://wa.me/6282225933009?text=Assalamualaikum,%20saya%20sudah%20berdonasi%20untuk%20Panti%20Asuhan%20Baitii%20Jannatii."
                        target="_blank"
                        class="inline-block mt-6 bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition-transform transform hover:scale-105">
                        Konfirmasi via WhatsApp
                    </a>
                </div>

            </div>
        </section>
    </PublicLayout>
</template>