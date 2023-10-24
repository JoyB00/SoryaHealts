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
    return view('login');
});

Route::get('/transaksi', function () {
    return view(
        'transaksi',
        [
            'obat' => [
                ["nama_obat" => "obat 1"],
                ["jenis_obat" => "umum"],
                ["kategori_obat" => "oles"],
                ["golongan_obat" => "semua umur"],
                ["harga_obat" => 1000],
                ["stock_obat" => 100],
                ["dosis_obat" => 10],
                ["deskripsi" => "obat untuk orang sakit kulit"],
            ],
            [
                ["nama_obat" => "obat 2"],
                ["jenis_obat" => "anjuran Dokter"],
                ["kategori_obat" => "minum"],
                ["golongan_obat" => "dewasa"],
                ["harga_obat" => 9000],
                ["stock_obat" => 100],
                ["dosis_obat" => 5],
                ["deskripsi" => "obat untuk orang sakit lambung"],
            ],
            [
                ["nama_obat" => "obat 3"],
                ["jenis_obat" => "umum"],
                ["kategori_obat" => "minum"],
                ["golongan_obat" => "balita"],
                ["harga_obat" => 1900],
                ["stock_obat" => 100],
                ["dosis_obat" => 10],
                ["deskripsi" => "obat untuk balita yang demam"],
            ]
        ]
    );
});

Route::get('/halamanBeli', function () {
    return view('halamanBeli');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});
