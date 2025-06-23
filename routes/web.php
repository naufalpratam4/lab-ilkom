<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function(){
    return view('aboutus');
});
Route::get('/reservasi', function(){
    return view('reservasiRuang');
});
