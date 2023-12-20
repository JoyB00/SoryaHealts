<?php

use App\Http\Controllers\api\AlamatController;
use App\Http\Controllers\api\ArtikelController;
use App\Http\Controllers\api\DetailPengadaanController;
use App\Http\Controllers\api\DetailTransaksiController;
use App\Http\Controllers\api\MutasiDanaController;
use App\Http\Controllers\api\ObatController;
use App\Http\Controllers\api\PengadaanObatController;
use App\Http\Controllers\api\StafController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\TransaksiController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\client\DetailPengadaan;
use App\Http\Controllers\client\DetailPengadaanClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [App\Http\Controllers\api\UserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\api\UserController::class, 'login']);


Route::group(
    ['middleware' => 'auth:api'],
    function () {
        Route::get('/alamat', [App\Http\Controllers\api\AlamatController::class, 'index']);
        // customer
        Route::post('/logout', [App\Http\Controllers\api\UserController::class, 'logout']);
        Route::get('/user', [UserController::class, 'index']);
        Route::put('/user/{id}', [UserController::class, 'update']);

        // supplier
        Route::get('/suppliers', [SupplierController::class, 'index']);
        Route::post('/suppliers', [SupplierController::class, 'store']);
        Route::get('/suppliers/{id}', [SupplierController::class, 'show']);
        Route::put('/suppliers/{id}', [SupplierController::class, 'update']);
        Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy']);

        // Obat
        Route::get('/obat', [ObatController::class, 'index']);
        Route::post('/obat', [ObatController::class, 'store']);
        Route::get('/obat/{id}', [ObatController::class, 'show']);
        Route::put('/obat/{id}', [ObatController::class, 'update']);
        Route::delete('/obat/{id}', [ObatController::class, 'destroy']);

        // Artikel
        Route::get('/artikel', [ArtikelController::class, 'index']);
        Route::post('/artikel', [ArtikelController::class, 'store']);
        Route::get('/artikel/{id}', [ArtikelController::class, 'show']);
        Route::put('/artikel/{id}', [ArtikelController::class, 'update']);
        Route::delete('/artikel/{id}', [ArtikelController::class, 'destroy']);

        // Staf
        Route::get('/staf', [StafController::class, 'index']);
        Route::post('/staf', [StafController::class, 'store']);
        Route::get('/staf/{id}', [StafController::class, 'show']);
        Route::put('/staf/{id}', [StafController::class, 'update']);
        Route::delete('/staf/{id}', [StafController::class, 'destroy']);

        // Pengadaan Obat
        Route::get('/pengadaanObat', [PengadaanObatController::class, 'index']);
        Route::post('/pengadaanObat', [PengadaanObatController::class, 'store']);
        Route::get('/pengadaanObatDetail/{id}', [PengadaanObatController::class, 'show']);
        Route::delete('/pengadaanObat/{id}', [PengadaanObatController::class, 'destroy']);

        // Detail Pengadaan
        Route::get('/detailPengadaan', [DetailPengadaanController::class, 'index']);
        Route::post('/detailPengadaan', [DetailPengadaanController::class, 'store']);
        Route::get('/detailPengadaan/{id}', [DetailPengadaanController::class, 'show']);
        Route::put('/detailPengadaan/{id}', [DetailPengadaanController::class, 'update']);
        Route::delete('/detailPengadaan/{id}', [DetailPengadaanController::class, 'destroy']);

        // Mutasi Dana
        Route::get('/mutasiPenjualan', [MutasiDanaController::class, 'indexPenjualan']);
        Route::get('/mutasiPembelian', [MutasiDanaController::class, 'indexPembelian']);
        Route::post('/mutasiDana', [MutasiDanaController::class, 'store']);

        //testimoni
        Route::get('/testimoni', [App\Http\Controllers\api\TestimoniController::class, 'index']);
        Route::post('/testimoni', [App\Http\Controllers\api\TestimoniController::class,'store']);
        Route::get('/testimoni/{id}', [App\Http\Controllers\api\TestimoniController::class,'show']);
        Route::put('/testimoni/{id}', [App\Http\Controllers\api\TestimoniController::class, 'update']);
        Route::delete('/testimoni/{id}', [App\Http\Controllers\api\TestimoniController::class, 'destroy']);

        // Pengadaan Obat
        Route::get('/pengadaanObat', [PengadaanObatController::class, 'index']);
        Route::post('/pengadaanObat', [PengadaanObatController::class,'store']);

        //alamat
        Route::get('/alamat', [AlamatController::class, 'index']);
        Route::post('/alamat', [AlamatController::class,'store']);
        Route::get('/alamat/{id}', [AlamatController::class,'show']);
        Route::put('/alamat/{id}', [AlamatController::class, 'update']);    
        Route::delete('/alamat/{id}', [AlamatController::class, 'destroy']);

        // Transaksi
        Route::get('/transaksi', [PengadaanObatController::class, 'index']);
        Route::post('/transaksi', [PengadaanObatController::class, 'store']);
        Route::get('/transaksi/{id}', [PengadaanObatController::class, 'show']);
        Route::delete('/transaksi/{id}', [PengadaanObatController::class, 'destroy']);


        // Detail Transaksi
        Route::get('/keranjang', [DetailTransaksiController::class, 'index']);
        Route::post('/keranjang', [DetailTransaksiController::class, 'store']);
        Route::get('/keranjang/{id}', [DetailTransaksiController::class, 'show']);
        Route::put('/keranjang/{id}', [DetailTransaksiController::class, 'update']);
        Route::delete('/keranjang/{id}', [DetailTransaksiController::class, 'destroy']);
    

        // Transaksi
        Route::get('/transaksi', [TransaksiController::class, 'index']);
        Route::post('/transaksi', [TransaksiController::class, 'store']);
        Route::get('/transaksi/{id}', [TransaksiController::class, 'show']);
        Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy']);


        // Detail Transaksi
        Route::get('/keranjang', [DetailTransaksiController::class, 'index']);
        Route::post('/keranjang', [DetailTransaksiController::class, 'store']);
        Route::get('/keranjang/{id}', [DetailTransaksiController::class, 'show']);
        Route::put('/keranjang/{id}', [DetailTransaksiController::class, 'update']);
        Route::delete('/keranjang/{id}', [DetailTransaksiController::class, 'destroy']);
    }
);

// Route::apiResource('alamats', AlamatController::class);
// Route::apiResource('detail_pengadaans', DetailPengadaanController::class);
// Route::apiResource('detail_transaksis', DetailTransaksiController::class);
// Route::apiResource('mutasi_danas', MutasiDanaController::class);