<?php

<<<<<<< HEAD
use App\Http\Controllers\api\ObatController;

use App\Http\Controllers\api\PengadaanObatController;
use App\Http\Controllers\api\StafController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\TestimoniController;
use App\Http\Controllers\api\TransaksiController;
=======
use App\Http\Controllers\api\AlamatController;
use App\Http\Controllers\api\ObatController;
use App\Http\Controllers\api\PengadaanObatController;
use App\Http\Controllers\api\StafController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\UserController;
>>>>>>> main
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

<<<<<<< HEAD
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('obat', ObatController::class);
Route::apiResource('pengadaanObat', PengadaanObatController::class);
Route::apiResource('staf', StafController::class);
Route::apiResource('supplier', SupplierController::class);
Route::apiResource('testimoni', TestimoniController::class);
Route::apiResource('transaksi', TransaksiController::class);
=======
Route::post('/register', [App\Http\Controllers\api\UserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\api\UserController::class, 'login']);


Route::group(
    ['middleware' => 'auth:api'],
    function () {
        Route::get('/alamat', [App\Http\Controllers\api\AlamatController::class, 'index']);
        // customer
        Route::get('/user', [UserController::class, 'index']);

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

        // Staf
        Route::get('/staf', [StafController::class, 'index']);
        Route::post('/staf', [StafController::class, 'store']);
        Route::get('/staf/{id}', [StafController::class, 'show']);
        Route::put('/staf/{id}', [StafController::class, 'update']);
        Route::delete('/staf/{id}', [StafController::class, 'destroy']);

        // Pengadaan Obat
        Route::get('/pengadaanObat', [PengadaanObatController::class, 'index']);
        Route::post('/pengadaanObat', [PengadaanObatController::class, 'store']);
    }

);

// Route::apiResource('alamats', AlamatController::class);
// Route::apiResource('detail_pengadaans', DetailPengadaanController::class);
// Route::apiResource('detail_transaksis', DetailTransaksiController::class);
// Route::apiResource('mutasi_danas', MutasiDanaController::class);
>>>>>>> main
