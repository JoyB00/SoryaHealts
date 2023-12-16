<?php

use App\Http\Controllers\api\ObatController;

use App\Http\Controllers\api\PengadaanObatController;
use App\Http\Controllers\api\StafController;
use App\Http\Controllers\api\SupplierController;
use App\Http\Controllers\api\TestimoniController;
use App\Http\Controllers\api\TransaksiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('obat', ObatController::class);
Route::apiResource('pengadaanObat', PengadaanObatController::class);
Route::apiResource('staf', StafController::class);
Route::apiResource('supplier', SupplierController::class);
Route::apiResource('testimoni', TestimoniController::class);
Route::apiResource('transaksi', TransaksiController::class);
