<template>
  <div class="bg-gray-50 text-gray-800">
    <header class="bg-white shadow-md py-2 fixed w-full z-50">
      <div class="container mx-auto flex items-center justify-between px-6">
        <Link :href="route('home')">
        <img src="/images/logo-panti-black.png" alt="Logo Panti Asuhan Baitii Jannatii Purwokerto" class="h-16 w-auto">
        </Link>

        <div class="hidden md:flex items-center space-x-8">
          <Link :href="route('home')" class="font-medium text-gray-700 hover:text-green-500"
            :class="{ 'text-green-500 font-bold': $page.component === 'Welcome' }">Beranda</Link>
          <Link :href="route('about')" class="font-medium text-gray-700 hover:text-green-500"
            :class="{ 'text-green-500 font-bold': $page.component === 'About' }">Tentang Kami</Link>
          <Link :href="route('programs')" class="font-medium text-gray-700 hover:text-green-500"
            :class="{ 'text-green-500 font-bold': $page.component === 'Programs' }">Program</Link>
          <Link :href="route('gallery')" class="font-medium text-gray-700 hover:text-green-500"
            :class="{ 'text-green-500 font-bold': $page.component === 'Gallery' }">Galeri</Link>
          <Link :href="route('contact')" class="font-medium text-gray-700 hover:text-green-500"
            :class="{ 'text-green-500 font-bold': $page.component === 'Contact' }">Kontak</Link>
          <Link :href="route('donate')"
            class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-full shadow-lg transition-transform transform hover:scale-105">
          Donasi Sekarang
          </Link>
        </div>
      </div>
    </header>

    <main class="pt-20">
      <Transition name="page-fade" mode="out-in">
        <div :key="$page.url">
          <slot />
        </div>
      </Transition>
    </main>

    <footer class="bg-green-600 text-white mt-16" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="container mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <img src="/images/logo-panti-white.png" alt="Logo Panti Asuhan Baitii Jannatii Purwokerto"
            class="h-16 w-auto mb-4">
          <p class="text-sm text-gray-300">Memberikan rumah yang aman, pendidikan berkualitas, dan harapan untuk setiap
            mimpi.</p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-4">Jelajahi</h3>
          <ul class="space-y-2 text-sm">
            <li>
              <Link :href="route('about')" class="text-gray-300 hover:text-green-400">Tentang Kami</Link>
            </li>
            <li>
              <Link :href="route('programs')" class="text-gray-300 hover:text-green-400">Program Kami</Link>
            </li>
            <li>
              <Link :href="route('gallery')" class="text-gray-300 hover:text-green-400">Galeri</Link>
            </li>
            <li>
              <Link :href="route('articles.index')" class="text-gray-300 hover:text-green-400">Artikel</Link>
            </li>
            <li>
              <Link :href="route('donate')" class="text-gray-300 hover:text-green-400">Cara Donasi</Link>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-4">Hubungi Kami</h3>
          <p class="text-sm text-gray-300">{{ $page.props.settings.alamat }}</p>
          <p class="text-sm text-gray-300 mt-2">Email: {{ $page.props.settings.email }}</p>
          <p class="text-sm text-gray-300">Telp: {{ $page.props.settings.telepon }}</p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-4">Ikuti Kami</h3>
          <div class="flex space-x-4">
            <a href="#" class="text-gray-300 hover:text-green-400 text-xl"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-gray-300 hover:text-green-400 text-xl"><i class="fab fa-instagram"></i></a>
          </div>
          <Link :href="route('login')" class="text-sm text-gray-400 hover:text-green-400 block mt-6">Admin Login</Link>
        </div>
      </div>
      <div class="bg-green-500 py-4 text-center text-sm text-gray-400">
        &copy; {{ new Date().getFullYear() }} Panti Asuhan Baitii Jannatii. All rights reserved.
      </div>
    </footer>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<style>
.page-fade-enter-active,
.page-fade-leave-active {
  transition: opacity 0.3s ease;
}

.page-fade-enter-from,
.page-fade-leave-to {
  opacity: 0;
}
</style>