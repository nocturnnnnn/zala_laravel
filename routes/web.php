<?php

use App\Http\Controllers\AktivitasController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataDiriController;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Portofolio Zala Risky Pratama (NIM: 2024150064)
|--------------------------------------------------------------------------
*/

// 1. Halaman Beranda (Ucapan Selamat Datang)
Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index']);

// 2. Halaman Data Diri (Tanpa Foto)
Route::get('/data-diri', [DataDiriController::class, 'index'])->name('datadiri');
Route::get('/datadiri', [DataDiriController::class, 'index']);

// 3. Halaman Aktivitas & Proyek Perkuliahan
Route::get('/aktivitas', [AktivitasController::class, 'index'])->name('aktivitas');

// 4. Halaman Kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/kontak/hubungi', [KontakController::class, 'hubungi'])->name('hubungi');
Route::post('/kontak', [KontakController::class, 'kirimPesan'])->name('kontak.kirim');

// Rute Praktikum Sebelumnya
Route::get('/halo', [HaloController::class, 'index'])->name('halo');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/welcome', function () {
    return view('welcome');
});
