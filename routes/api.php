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

Route::apiResource('alamat', AlamatController::class);
Route::apiResource('detailPengadaan', DetailPengadaanController::class);
Route::apiResource('detailTransaksi', DetailTransaksiController::class);
Route::apiResource('mutasiDana', MutasiDanaController::class);