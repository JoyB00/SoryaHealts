<?php

use App\Http\Controllers\api\AlamatController;
use App\Http\Controllers\api\DetailPengadaanController;
use App\Http\Controllers\api\DetailTransaksiController;
use App\Http\Controllers\api\MutasiDanaController;
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

Route::apiResource('alamats', AlamatController::class);
Route::apiResource('detail_pengadaans', DetailPengadaanController::class);
Route::apiResource('detail_transaksis', DetailTransaksiController::class);
Route::apiResource('mutasi_danas', MutasiDanaController::class);