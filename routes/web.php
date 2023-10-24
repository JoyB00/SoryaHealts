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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dashboard', function () {
    return view('Admin/dashboard');
});

Route::get('/suppliers', function () {
    return view(
        'Admin/suppliers',
    [
        'pemasok' =>[
            [
                'no'=> '1',
                'nama'=> 'Arif Suryo',
                'noTelp'=> '012312332',
                'email'=> 'blabla@gmail.com',
                'action'=> ''
            ],
            [
                'no'=> '2',
                'nama'=> 'dendy',
                'noTelp' => '07890128192',
                'email' => 'lololo@gmail.com',
                'action' => ''
            ]
            
        ]
    ]
);
});

Route::get('/customer', function () {
    return view(
        'Admin/customer',
    [
        'pelanggan' =>[
            [
                'no'=> '1',
                'nama'=> 'Brader',
                'noTelp'=> '123',
                'email'=> 'blabla@gmail.com',
                'action'=> ''
            ],
            [
                'no'=> '2',
                'nama'=> 'tup',
                'noTelp' => '12434',
                'email' => 'lololo@gmail.com',
                'action' => 'btn-primary', 'btn-danger'
            ]
            
        ]
    ]
);
});