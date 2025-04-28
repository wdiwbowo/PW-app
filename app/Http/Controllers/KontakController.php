<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kontakController extends Controller
{
    // Menampilkan halaman kontak
    public function showForm()
    {
        return view('kontak');
    }

    // Menangani pengiriman pesan
    public function sendMessage(Request $request)
    {
        // Proses pesan (misalnya, kirim email atau simpan ke database)
        // Validasi dan logika pengiriman pesan bisa ditambahkan di sini
        return redirect()->back()->with('success', 'Pesan Anda telah dikirim.');
    }
}
