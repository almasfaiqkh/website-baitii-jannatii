<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class GalleryController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Gallery/Index', [
            'title' => 'Manajemen Galeri',
            'photos' => Photo::latest()->get(), // Ambil semua foto, urutkan dari yang terbaru
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Wajib gambar, max 2MB
        ]);

        // Simpan gambar ke folder 'public/gallery' dan dapatkan path-nya
        $path = $request->file('photo')->store('gallery', 'public');

        Photo::create([
            'path' => $path,
            'caption' => $request->caption,
        ]);

        return back()->with('success', 'Foto berhasil diunggah.');
    }

    public function destroy(Photo $photo)
    {
        // Hapus file gambar dari storage
        Storage::disk('public')->delete($photo->path);

        // Hapus record dari database
        $photo->delete();

        return back()->with('success', 'Foto berhasil dihapus.');
    }
}
