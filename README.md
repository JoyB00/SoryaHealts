## About Laravel
<title> UAS Pemrograman Web Gasal 2023/2024 </title>
<hr>
## Kelas B kelompok 1
<hr>
<ul>
    <li>I Kadek Dendy Pramartha (210711095) - </li>
    <li>Candra Dionisius Sihotang (210711241) - </li>
    <li>Tio Pramudya (210711411) - </li>
       
</ul>

## Username dan Password login
<ol>
        <li>User Login
            <ul>
                <li>Username : dendypramartha7e@gmail.com</li>
                <li>Password : 12345678 </li>
                
            </ul>
        </li>
        <li>Admin Login
            <ul>
                <li>Username : dendypramartha03e@gmail.com</li>
                <li>Password : admin123 </li>
                
            </ul>
        </li>
        <li>Slackware</li>
</ol>

## Bonus yang diambil

<ol>
        <li>Hosting 
            <ul>
                <li>Backend : ...</li>
                <li>Frontend : ... </li>
                
            </ul>
        </li>
        <li>Routes API :
            <ul>
                <li>Route::get('/alamat', [App\Http\Controllers\api\AlamatController::class, 'index']);
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
        Route::delete('/keranjang/{id}', [DetailTransaksiController::class, 'destroy']);</li>
                
            </ul>
        </li>
</ol>





Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
