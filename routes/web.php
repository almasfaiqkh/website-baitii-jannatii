<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');
Route::get('/program', [PageController::class, 'programs'])->name('programs');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [PageController::class, 'contact'])->name('contact');
Route::get('/donasi', [PageController::class, 'donate'])->name('donate');
Route::get('/artikel', [PageController::class, 'articlesIndex'])->name('articles.index');
Route::get('/artikel/{article:id}', [PageController::class, 'articlesShow'])->name('articles.show');

Route::post('/kontak', [PageController::class, 'storeContact'])->name('contact.store');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'title' => 'Dasbor'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // route profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // route settings
    Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
    Route::put('/admin/settings', [SettingController::class, 'update'])->name('admin.settings.update');

    // route galeri
    Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
    Route::post('/admin/gallery', [GalleryController::class, 'store'])->name('admin.gallery.store');
    Route::delete('/admin/gallery/{photo}', [GalleryController::class, 'destroy'])->name('admin.gallery.destroy');

    // Route untuk Artikel
    Route::resource('/admin/articles', ArticleController::class, [
        'as' => 'admin'
    ]);
});

require __DIR__ . '/auth.php';
