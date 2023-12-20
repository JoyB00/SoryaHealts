<?php

use App\Http\Controllers\client\admin\ArtikelClient;
use App\Http\Controllers\client\admin\DetailPengadaanClient;
use App\Http\Controllers\client\admin\MutasiDanaClient;
use App\Http\Controllers\client\admin\ObatClient;
use App\Http\Controllers\client\admin\PengadaanClient;
use App\Http\Controllers\client\admin\StafClient;
use App\Http\Controllers\client\admin\SupplierClient;
use App\Http\Controllers\client\customer\HomeClient;
use App\Http\Controllers\client\customer\KeranjangClient;
use App\Http\Controllers\client\customer\ProfileClient;
use App\Http\Controllers\client\customer\TransaksiClient;
use App\Http\Controllers\client\UserClient;
use App\Models\Transaksi;
use Illuminate\Contracts\Session\Session;
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

Route::post('/register', [UserClient::class, 'register']);
Route::post('/login', [UserClient::class, 'login'])->name('login');
Route::get('register/verify/{verify_key}', [UserClient::class, 'verify'])->name('verify');
Route::get('/register', [UserClient::class, 'gotoRegister'])->name('register');
Route::get('/login', [UserClient::class, 'checkLogin'])->name('login');

Route::group(
    ['middleware' =>  ['auth', 'cekRole:admin']],
    function () {

        Route::get('/dashboard', [UserClient::class, 'gotoDashboardAdmin'])->name('admin');
        Route::get('/customer', [UserClient::class, 'index'])->name('customerIndex');

        // Supplier
        Route::get('/suppliers', [SupplierClient::class, 'index'])->name('supplierIndex');
        Route::post('/suppliers', [SupplierClient::class, 'store'])->name('supplierStore');
        Route::get('/suppliers/{id}', [SupplierClient::class, 'show'])->name('supplierShow');
        Route::put('/suppliers/{id}', [SupplierClient::class, 'update'])->name('supplierUpdate');
        Route::delete('/suppliers/{id}', [SupplierClient::class, 'destroy'])->name('supplierDelete');

        // Obat
        Route::get('/obat', [ObatClient::class, 'index'])->name('obatIndex');
        Route::post('/pengadaanTambahObat', [ObatClient::class, 'store'])->name('obatStore');
        Route::put('/obat/{id}', [ObatClient::class, 'update'])->name('obatUpdate');
        Route::delete('/obat/{id}', [ObatClient::class, 'destroy'])->name('obatDelete');

        // Artikel
        Route::get('/artikel', [ArtikelClient::class, 'index'])->name('artikelIndex');
        Route::post('/artikel', [ArtikelClient::class, 'store'])->name('artikelStore');
        Route::get('/artikel/{id}', [ArtikelClient::class, 'show'])->name('artikelShow');
        Route::put('/artikel/{id}', [ArtikelClient::class, 'update'])->name('artikelUpdate');
        Route::delete('/artikel/{id}', [ArtikelClient::class, 'destroy'])->name('artikelDelete');

        // Staf
        Route::get('/staf', [StafClient::class, 'index'])->name('stafIndex');
        Route::post('/staf', [StafClient::class, 'store'])->name('stafStore');
        Route::get('/staf/{id}', [StafClient::class, 'show'])->name('stafShow');
        Route::put('/staf/{id}', [StafClient::class, 'update'])->name('stafUpdate');
        Route::delete('/staf/{id}', [StafClient::class, 'destroy'])->name('stafDelete');

        // Pengadaan Obat
        Route::get('/pengadaanObat', [PengadaanClient::class, 'index'])->name('pengadaanIndex');
        Route::post('/pengadaanObat', [PengadaanClient::class, 'store'])->name('pengadaanStore');
        Route::get('/pengadaanObatDetail', [PengadaanClient::class, 'show'])->name('pengadaanShow');
        Route::delete('/pengadaanObat/{id}', [PengadaanClient::class, 'destroy'])->name('pengadaanDelete');
        Route::get('/tambahObat', [PengadaanClient::class, 'gotoTambahObat'])->name('tambahObat');

        // Detail pengadaan Obat
        Route::post('/pengadaanObatDetail', [DetailPengadaanClient::class, 'store'])->name('detailPengadaanStore');
        Route::delete('/pengadaanObatDetail', [DetailPengadaanClient::class, 'destroy'])->name('detailPengadaanDelete');

        // Mutasi Dana
        Route::post('/pengadaan', [MutasiDanaClient::class, 'storePengadaan'])->name('mutasiDanaPengadaan');
        Route::get('/mutasiPembelian', [MutasiDanaClient::class, 'indexPembelian'])->name('mutasiPembelian');
        Route::get('/mutasiPenjualan', [MutasiDanaClient::class, 'indexPenjualan'])->name('mutasiPenjualan');
    }
);


Route::group(
    ['middleware' =>  ['auth', 'cekRole:admin,customer']],
    function () {
        Route::post('/logout', [UserClient::class, 'logout'])->name('logout');
        Route::put('/profile', [ProfileClient::class, 'update'])->name('updateProfile');

        Route::get('/DetailObat', [ObatClient::class, 'show'])->name('detailObat');
        Route::get('/DetailArtikel', [ArtikelClient::class, 'show'])->name('detailArtikel');

        Route::get('/profile', [ProfileClient::class, 'gotoProfile'])->name('gotoProfile');

        Route::get('/keranjang', [KeranjangClient::class, 'gotoKeranjang'])->name('gotoKeranjang');
        Route::post('/keranjang', [KeranjangClient::class, 'storeKeranjang'])->name('storeKeranjang');
        Route::delete('/keranjang', [KeranjangClient::class, 'destroy'])->name('deleteItem');
        Route::post('/transaksi', [TransaksiClient::class, 'store'])->name('transaksi');

        Route::get('/cekPembelian', [KeranjangClient::class, 'cekPembelian'])->name('cekPembelian');
        Route::get('/pembayaran', [KeranjangClient::class, 'gotoPembayaran'])->name('pembayaran');
        Route::post('/home', [MutasiDanaClient::class, 'storeTransaksiUser'])->name('mutasiDanaTransaksi');


    }
);
Route::get('/', [HomeClient::class, 'getAllData'])->name('home');
Route::get('/DaftarObat', [HomeClient::class, 'daftarObat'])->name('daftarObat');
Route::get('/JenisObat', [HomeClient::class, 'sortByJenisObat'])->name('sortByJenisObat');
Route::get('/KategoriObat', [HomeClient::class, 'sortByKategoriObat'])->name('sortByKategoriObat');
Route::get('/Artikel', [HomeClient::class, 'artikel'])->name('artikel');
Route::get('/TopikArtikel', [HomeClient::class, 'sortByTopikArtikel'])->name('sortByTopikArtikel');
Route::get('/TentangKami', [HomeClient::class, 'tentangKami'])->name('tentangKami');

