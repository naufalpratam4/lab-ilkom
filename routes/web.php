<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservasiController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function(){
    return view('aboutus');
});
Route::get('/reservasi', function(){
    return view('reservasiRuang');
});

Route::post('/reservasi-post', [ReservasiController::class, 'addreservasi'])->name('addreservasi');


