<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController; // Pastikan Anda menggunakan controller yang benar

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/produk', function () {
    return view('overview');
});

Route::get('/spesifikasi', function () {
    return view('spesifikasi');
});

Route::get('/sertifikasi', function () {
    return view('sertifikasi');
});



// Halaman Kontak
Route::get('/kontak', [kontakController::class, 'showForm']); // Menampilkan halaman kontak
Route::post('/send-message', [KontakController::class, 'sendMessage']); // Menangani pengiriman pesan

// Rute untuk halaman lainnya
Route::get('/image', function () {
    return view('image');
});

Route::get('/pengiriman', function () {
    return view('pengiriman');
});

Route::get('/material', function () {
    return view('material');
});
