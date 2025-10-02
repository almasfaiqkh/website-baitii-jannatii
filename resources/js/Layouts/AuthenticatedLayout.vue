<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ConfirmationModal from '@/Components/ConfirmationModal.vue';

const showLogoutConfirm = ref(false);

const openLogoutConfirm = () => {
    showLogoutConfirm.value = true;
};

const closeLogoutConfirm = () => {
    showLogoutConfirm.value = false;
};

const logout = () => {
    router.post(route('logout'));
    closeLogoutConfirm();
};
</script>

<template>
    <div>

        <Head :title="$page.props.title" />

        <div class="min-h-screen bg-gray-100 flex">
            <aside class="w-64 bg-green-800 text-white flex flex-col">
                <div class="h-16 flex items-center justify-center text-xl font-bold border-b border-green-700">
                    Admin Panel
                </div>
                <nav class="flex-grow">
                    <Link :href="route('dashboard')" :class="{ 'bg-green-600': $page.component === 'Dashboard' }"
                        class="block py-3 px-6 hover:bg-green-600 transition duration-200">
                    <i class="fas fa-tachometer-alt w-6 mr-2"></i> Dasbor
                    </Link>
                    <Link :href="route('admin.settings.index')"
                        :class="{ 'bg-green-600': $page.component.startsWith('Admin/Settings') }"
                        class="block py-3 px-6 hover:bg-green-600 transition duration-200">
                    <i class="fas fa-cog w-6 mr-2"></i> Pengaturan
                    </Link>
                    <Link :href="route('admin.gallery.index')"
                        :class="{ 'bg-green-600': $page.component.startsWith('Admin/Gallery') }"
                        class="block py-3 px-6 hover:bg-green-600 transition duration-200">
                    <i class="fas fa-images w-6 mr-2"></i> Galeri
                    </Link>
                    <Link :href="route('admin.articles.index')"
                        :class="{ 'bg-green-600': $page.component.startsWith('Admin/Articles') }"
                        class="block py-3 px-6 hover:bg-green-600 transition duration-200">
                    <i class="fas fa-newspaper w-6 mr-2"></i> Artikel
                    </Link>
                </nav>
                <div class="border-t border-green-700">
                    <button @click="openLogoutConfirm"
                        class="block w-full text-left py-3 px-6 hover:bg-red-700 transition duration-200">
                        <i class="fas fa-sign-out-alt w-6 mr-2"></i> Logout
                    </button>
                </div>
            </aside>

            <div class="flex-1 flex flex-col">
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ $page.props.title }}
                        </h2>
                        <div class="text-gray-600">
                            Selamat datang, {{ $page.props.auth.user.name }}!
                        </div>
                    </div>
                </header>

                <main class="flex-grow p-6">
                    <slot />
                </main>
            </div>
        </div>

        <ConfirmationModal :show="showLogoutConfirm" title="Logout"
            message="Apakah Anda yakin ingin keluar dari sesi ini?" @confirm="logout" @close="closeLogoutConfirm" />
    </div>
</template>