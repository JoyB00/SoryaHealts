<?php

use App\Http\Controllers\api\AlamatController;
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
    }

);
