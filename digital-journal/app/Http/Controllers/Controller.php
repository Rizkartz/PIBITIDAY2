<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function store(Request $request)
    {
        // 1. Cek apakah ada file yang dikirim
        if ($request->hasFile('file')) {
            // 2. Simpan file tersebut ke folder 'public/uploads'
            $path = $request->file('file')->store('uploads', 'public');
            
            // Nantinya di sini kita menyimpan nama jalurnya ($path) ke database
            return back()->with('success', 'File berhasil diunggah ke: ' . $path);
        }

        return back()->with('success', 'Postingan teks berhasil disimpan!');
    }
}
