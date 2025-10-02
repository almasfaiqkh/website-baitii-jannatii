# 🌐 Website Profil Panti Asuhan Baitii Jannatii

Ini adalah proyek Kerja Praktek untuk **Rancang Bangun Website Profil Panti Asuhan Baitii Jannatii** di Purwokerto. Website ini dibangun sebagai sistem informasi berbasis web untuk meningkatkan visibilitas online, memudahkan calon donatur mendapatkan informasi, serta menyediakan platform bagi panti untuk membagikan berita dan kegiatan mereka.

![Tangkapan Layar Website](./screenshots/homepage.png)

---

## ✨ Fitur Utama

### Untuk Pengunjung (Frontend)
- **Desain Modern & Responsif:** Tampilan website dapat menyesuaikan diri dengan baik di berbagai perangkat (desktop, tablet, dan mobile).
- **Halaman Dinamis:** Konten seperti Visi & Misi, Kontak, Galeri, dan Artikel dikelola sepenuhnya oleh admin.
- **Animasi Interaktif:** Transisi halaman yang mulus (SPA) dan animasi saat scroll (`AOS.js`) untuk pengalaman pengguna yang lebih menarik.
- **Galeri Foto:** Menampilkan kegiatan panti dengan fitur *lightbox* (zoom gambar).
- **Daftar & Detail Artikel:** Pengunjung dapat membaca berita dan kegiatan terbaru yang dipublikasikan oleh panti.
- **Formulir Kontak:** Pengunjung dapat mengirim pesan langsung melalui website.

### 🔐 Untuk Admin (Backend)
- **Otentikasi Aman:** Halaman admin dilindungi dengan sistem login.
- **Dasbor Admin:** Tampilan utama setelah login.
- **CRUD Pengaturan Website:** Admin dapat mengubah data inti seperti Visi, Misi, Alamat, dan Kontak kapan saja.
- **CRUD Manajemen Galeri:** Admin dapat dengan mudah mengunggah dan menghapus foto-foto kegiatan.
- **CRUD Manajemen Artikel:** Admin memiliki sistem untuk Tulis, Edit, dan Hapus artikel atau berita.

---

## 💻 Tumpukan Teknologi (Tech Stack)

Proyek ini dibangun menggunakan tumpukan teknologi modern:

- **Backend:** **Laravel 10** (PHP Framework)
- **Frontend:** **Vue.js 3** (JavaScript Framework)
- **Routing & Glue:** **Inertia.js** (untuk menciptakan pengalaman SPA)
- **Styling:** **Tailwind CSS** (Utility-first CSS Framework)
- **Database:** **MySQL**
- **Development Environment:** Vite, XAMPP/Laragon
- **Animasi:** AOS (Animate On Scroll)

---

## 🚀 Instalasi & Setup Lokal

Berikut adalah cara untuk menjalankan proyek ini di lingkungan lokal.

**Prasyarat:**
- PHP >= 8.1
- Composer
- Node.js & NPM
- Database (MySQL)

**Langkah-langkah:**
1.  **Clone repository ini:**
    ```bash
    git clone https://github.com/almasfaiqkh/website-baitii-jannatii.git
    ```
2.  **Masuk ke direktori proyek:**
    ```bash
    cd website-baitii-jannatii
    ```
3.  **Install dependensi PHP:**
    ```bash
    composer install
    ```
4.  **Install dependensi JavaScript:**
    ```bash
    npm install
    ```
5.  **Salin file environment:**
    ```bash
    cp .env.example .env
    ```
6.  **Generate application key:**
    ```bash
    php artisan key:generate
    ```
7.  **Konfigurasi file `.env`:**
    Sesuaikan koneksi database (DB_DATABASE, DB_USERNAME, DB_PASSWORD) dengan pengaturan lokal Anda.

8.  **Jalankan migrasi dan seeder database:**
    ```bash
    php artisan migrate:fresh --seed
    ```
9.  **Buat symbolic link untuk storage:**
    ```bash
    php artisan storage:link
    ```
10. **Jalankan server development:**
    - Di terminal pertama: `php artisan serve`
    - Di terminal kedua: `npm run dev`

11. **Buka aplikasi:**
    Akses `http://127.0.0.1:8000` di browser Anda.

---

## 📄 Lisensi

Proyek ini dilisensikan di bawah Lisensi MIT.
