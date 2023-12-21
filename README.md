## UAS Pemrograman Web Gasal 2023/2024
<hr>

## Kelas B kelompok 1

<hr>

## Anggota Kelompok
<ul>
    <li>I Kadek Dendy Pramartha (210711095) - </li>
    <li>Candra Dionisius Sihotang (210711241) - </li>
    <li>Tio Pramudya (210711411) - </li>
       
</ul>

## Username & Password Login :

1.	User Login
    a.	Username : dendypramartha7e@gmail.com
    b.	Password : 12345678
2.	Admin login
    a.	Username : dendypramartha03e@gmail.com
    b.	Password : 12345678

## Bonus yang diambil
1.	Hosting : 
    a.	Backend
    b.	Forntend
2.	Routes API
        Route::get('/alamat', [App\Http\Controllers\api\AlamatController::class, 'index']);
  	
        // user
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
