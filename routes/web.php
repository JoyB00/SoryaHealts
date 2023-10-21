<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/daftarObat', function () {
    return view('daftarObat', [
        "title" => "DaftarObat"
    ]);
});
Route::get('/artikel', function () {
    return view('artikel', [
        "title" => "Artikel"
    ]);
});
Route::get('/tentangKami', function () {
    return view('tentangKami', [
        "title" => "Tentang Kami"
    ]);
});
Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile"
    ]);
});
Route::get('/daftarAlamat', function () {
    return view('daftarAlamat', [
        "title" => "Daftar Alamat"
    ]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
