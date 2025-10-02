<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Photo;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function about()
    {
        return Inertia::render('About');
    }

    public function programs()
    {
        return Inertia::render('Programs');
    }

    public function gallery()
    {
        return Inertia::render('Gallery', [
            'photos' => Photo::latest()->get(),
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }

    public function donate()
    {
        return Inertia::render('Donate');
    }

    public function articlesIndex()
    {
        return Inertia::render('Articles/Index', [
            'title' => 'Berita & Kegiatan',
            'articles' => Article::with('user:id,name')->latest()->paginate(6),
        ]);
    }

    public function articlesShow(Article $article)
    {
        // Load relasi user agar nama penulis bisa ditampilkan
        $article->load('user:id,name');

        return Inertia::render('Articles/Show', [
            'title' => $article->title,
            'article' => $article,
        ]);
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Di sini, Anda bisa menambahkan logika untuk mengirim email atau menyimpan ke database
        // Untuk sekarang, kita hanya akan kembali dengan pesan sukses

        return back()->with('success', 'Pesan Anda telah berhasil terkirim! Terima kasih.');
    }
}
