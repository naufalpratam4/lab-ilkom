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
