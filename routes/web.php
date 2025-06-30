<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\PeminjamanController;
use App\Models\Peminjaman;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/reservasi', function () {
    return view('reservasiRuang');
});
Route::get('/peminjaman', function () {
    return view('peminjamanBarang');
});

Route::post('/reservasi-post', [ReservasiController::class, 'addreservasi'])->name('addreservasi');
Route::post('/peminjaman-post', [PeminjamanController::class, 'addpeminjaman'])->name('addpeminjaman');

Route::get('/jadwal-ruang', function(){
    return view('jadwalRuang');
});

# dashboard
Route::get('/dashboard', function(){
    return view('dashboard.dashboard');
});
Route::get('/pemesanan-ruang', function(){
    return view('dashboard.pemesananRuangan');
});
Route::get('/setting', function(){
    return view('dashboard.setting');
});