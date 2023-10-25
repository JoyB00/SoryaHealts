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
                'no'=> 1,
                'nama'=> 'Arif Suryo',
                'noTelp'=> '012312332',
                'email'=> 'blabla@gmail.com',
                'action'=> ''
            ],
            [
                'no'=> 2,
                'nama'=> 'dendy',
                'noTelp' => '07890128192',
                'email' => 'lololo@gmail.com',
                'action' => ''
            ]
            
        ]
    ]
);
});

Route::get('/customers', function () {
    return view(
        'Admin/customers',
    [
        'pelanggan' =>[
            [
                'no'=> 1,
                'nama'=> 'Brader',
                'gender'=> 'L',
                'noTelp'=> '123',
                'alamat'=> 'semarang',
                'tglLahir'=> '12-12-1222',
                'action'=> ''
            ],
            [
                'no'=> 2,
                'nama'=> 'Ucok',
                'gender'=> 'P',
                'noTelp'=> '1232123',
                'alamat'=> 'jawa',
                'tglLahir'=> '13-32-1312',
                'action'=> ''
            ]
            
        ]
    ]
);
});

Route::get('/users', function () {
    return view(
        'Admin/users',
    [
        'pekerja' =>[
            [
                'no'=> 1,
                'id'=> 'SP2023',
                'nama'=> 'Pariban',
                'email'=> 'pariban@gmail.com',
                'password'=> '123321',
                'action' => ''
            ],
            [
                'no'=> 2,
                'id'=> 'SL2022',
                'nama'=> 'Alibaba',
                'email'=> 'Alibaba@gmail.com',
                'password'=> '789987',
                'action' => ''
            ]
            
        ]
    ]
);
});

Route::get('/products', function () {
    return view(
        'Admin/products',
    [
        'obat' =>[
            [
                'no'=> 1,
                'id'=> 'P2023',
                'nama'=> 'Panadol',
                'golongan'=> 'Strip',
                'jenis'=> 'Obat Demam',
                'dosis'=> '3mg',
                'deskripsi'=> 'lorem lorem baelah',
                'stock' => 23,
                'action' => ''
            ],
            [
                'no'=> 2,
                'id'=> 'R2023',
                'nama'=> 'Rhinofed',
                'golongan'=> 'Strip',
                'jenis'=> 'Obat Pilek',
                'dosis'=> '7mg',
                'deskripsi'=> 'lorem lorem ajlaah',
                'stock' => 22,
                'action' => ''
            ]
            
        ]
    ]
);
});

Route::get('/transactions_stockIn', function () {
    return view(
        'Admin/transactions_stockIn',
    [
        'obat' =>[
            [
                'no'=> 1,
                'id'=> 'P2023',
                'nama'=> 'Panadol',
                'qty'=> 3,
                'action' => ''
            ],
            [
                'no'=> 2,
                'id'=> 'M2023',
                'nama'=> 'Medixon',
                'qty'=> 4,
                'action' => ''
            ]
            
        ]
    ]
);
});

Route::get('/transactions_stockOut', function () {
    return view(
        'Admin/transactions_stockOut',
    [
        'obat' =>[
            [
                'no'=> 1,
                'id'=> 'P2023',
                'nama'=> 'Panadol',
                'qty'=> 3,
                'action' => ''
            ]
        ]
    ]
);
});

Route::get('/reports_sales', function () {
    return view(
        'Admin/reports_sales',
    [
        'hasil_jual' =>[
            [
                'no'=> 1,
                'nama'=> 'Panadol',
                'harga'=> 12000,
                'qty'=> 3,
                'total'=> 36000,
                'action' => ''
            ]
        ]
    ]
);
});

Route::get('/reports_stockIn', function () {
    return view(
        'Admin/reports_stockIn',
    [
        'hasil_masuk' =>[
            [
                'no'=> 1,
                'nama'=> 'Panadol',
                'harga'=> 12000,
                'qty'=> 3,
                'total'=> 36000,
                'action' => ''
            ]
        ]
    ]
);
});