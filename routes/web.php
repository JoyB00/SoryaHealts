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
        Route::get('/DetailObat', [ObatClient::class, 'show'])->name('detailObat');
        Route::get('/DetailArtikel', [ArtikelClient::class, 'show'])->name('detailArtikel');
        Route::get('/profile', [ProfileClient::class, 'gotoProfile'])->name('gotoProfile');
        Route::get('/keranjang', [KeranjangClient::class, 'gotoKeranjang'])->name('gotoKeranjang');
        Route::post('/transaksi', [TransaksiClient::class, 'store'])->name('transaksi');
    }
);
Route::get('/', [HomeClient::class, 'getAllData'])->name('home');
Route::get('/DaftarObat', [HomeClient::class, 'daftarObat'])->name('daftarObat');
Route::get('/JenisObat', [HomeClient::class, 'sortByJenisObat'])->name('sortByJenisObat');
Route::get('/KategoriObat', [HomeClient::class, 'sortByKategoriObat'])->name('sortByKategoriObat');
Route::get('/Artikel', [HomeClient::class, 'artikel'])->name('artikel');
Route::get('/TopikArtikel', [HomeClient::class, 'sortByTopikArtikel'])->name('sortByTopikArtikel');
Route::get('/TentangKami', [HomeClient::class, 'tentangKami'])->name('tentangKami');


// Baruu

// Route::get('/', function () {

//     $obat = [
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201806080341004677_aludonna-d-SYR.jpg",
//             "product_box_URL" => "aludonna-d-susp-150ml-10149",
//             "nama_obat" => "ALUDONNA D SUSP 150ML",
//             "harga" => "Rp 12.000,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Flu dan Batuk",
//             "label" => "umum"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201610040210071922_386-Aludonna.jpg",
//             "product_box_URL" => "aludonna-d-tab-160s-3873",
//             "nama_obat" => "ALUDONNA D TABLET",
//             "harga" => "Rp 5.232,- / Strip",
//             "jenis_obat" => 'Tablet',
//             "kategori_obat" => "Obat Demam",
//             "label" => "umum"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_2016022503274913_aludonna.jpg",
//             "product_box_URL" => "aludonna-susp-150ml-1604",
//             "nama_obat" => "ALUDONNA SUSP 150ML",
//             "harga" => "Rp 12.000,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Flu dan Batuk"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20190619082944209249_3.-ALUDONNA.jpg",
//             "product_box_URL" => "aludonna-tab-100s-9205",
//             "nama_obat" => "ALUDONNA TABLET",
//             "harga" => "Rp 12.000,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Pereda Nyeri"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20200711013619359225_ALUMY-100ML-1.jpg",
//             "product_box_URL" => "alumy-susp-100ml-10013",
//             "nama_obat" => "ALUMY SUSP 100ML",
//             "harga" => "Rp 12.000,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Flu dan Batuk"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20230815105136359225_ALUMY.png",
//             "product_box_URL" => "alumy-tab-10s-strip-10015",
//             "nama_obat" => "ALUMY TABLET",
//             "harga" => "Rp 4.805,- / Strip",
//             "jenis_obat" => 'Tablet',
//             "kategori_obat" => "Obat Demam"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20190610025924209249_6.-ALUPENT-20MG-TAB-100S.jpg",
//             "product_box_URL" => "alupent-20mg-tab-100s-17731",
//             "nama_obat" => "ALUPENT 20MG TABLET",
//             "harga" => "Rp 12.000,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Pereda Nyeri"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201906180847454677_6.-ALUPENT-INH.jpg",
//             "product_box_URL" => "alupent-inh-17732",
//             "nama_obat" => "ALUPENT INH",
//             "harga" => "Rp 12.000,- / Pcs",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Pereda Nyeri"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201907300908524677_ALUPENT-SYR-125ML.jpg",
//             "product_box_URL" => "alupent-syr-125ml-17733",
//             "nama_obat" => "ALUPENT SIRUP 125ML",
//             "harga" => "Rp 12.000,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Obat Anti Alergi"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201903281043364677_ALVITA-100-S.jpg",
//             "product_box_URL" => "alvita-tab-100s-16499",
//             "nama_obat" => "ALVITA TABLET",
//             "harga" => "Rp 663,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Obat Demam"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20190629112111209249_1.-ALXIL-125MG-D-SYR-60ML.jpg",
//             "product_box_URL" => "alxil-125mg-5ml-d-syr-60ml-15772",
//             "nama_obat" => "ALXIL 125MG/5ML D SIRUP 60ML",
//             "harga" => "Rp 10.500,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Obat Anti Alergi"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20190423013149209249_AXIL.jpg",
//             "product_box_URL" => "alxil-500mg-cap-30s-15771",
//             "nama_obat" => "ALXIL 500MG KAPSUL",
//             "harga" => "Rp 11.350,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Antibiotik"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_2019120401375823085_ALYRENOL.jpg",
//             "product_box_URL" => "alyrenol-5mg-tab-30s-22548",
//             "nama_obat" => "ALYRENOL 5MG TABLET",
//             "harga" => "Rp 5.474,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Antibiotik"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201804260411584677_alzim-5.jpg",
//             "product_box_URL" => "alzim-5mg-tab-30s-15774",
//             "nama_obat" => "ALZIM 5MG TABLET",
//             "harga" => "Rp 12.468,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Antibiotik"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201608010539164677_237-Amadiab.jpg",
//             "product_box_URL" => "amadiab-1mg-tab-3109",
//             "nama_obat" => "AMADIAB 1MG TABLET",
//             "harga" => "Rp 3.384,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Obat Demam"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201609090427091922_632-Amadiab-2.jpg",
//             "product_box_URL" => "amadiab-2mg-tab-3669",
//             "nama_obat" => "AMADIAB 2MG TABLET",
//             "harga" => "Rp 6.476,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Obat Anti Alergi"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201609300418571922_305-Carpiaton.jpg",
//             "product_box_URL" => "carpiaton-100mg-tab-1613",
//             "nama_obat" => "CARPIATON 100MG TABLET",
//             "harga" => "Rp 5.108,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Obat Anti Alergi"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_2017052910285313_1867-Carpiaton-25.png",
//             "product_box_URL" => "carpiaton-25mg-tab-4011",
//             "nama_obat" => "CARPIATON 25MG TABLET",
//             "harga" => "Rp 1.947,- / Kapsul",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Obat Anti Alergi"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201804190207534677_carsida.jpg",
//             "product_box_URL" => "carsida-chew-tab-10s-strip-10079",
//             "nama_obat" => "CARSIDA CHEW TABLET",
//             "harga" => "Rp 3.436,- / Strip",
//             "jenis_obat" => 'Tablet',
//             "kategori_obat" => "Obat Demam"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201810100320464677_carsida.jpeg",
//             "product_box_URL" => "carsida-susp-60ml-10171",
//             "nama_obat" => "CARSIDA SUSP 60ML",
//             "harga" => "Rp 9.999,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Obat Demam"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201901300346314677_cartilex.jpeg",
//             "product_box_URL" => "cartiflex-tab-1853",
//             "nama_obat" => "CARTIFLEX TABLET",
//             "harga" => "Rp 175.611,- / Botol",
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Obat Demam"
//         ],

//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20230621090306359225_BIO-OIL.png",
//             "product_box_URL" => "bio-oil-skincare-oil-25ml-32192",
//             "nama_obat" => "BIO-OIL SKINCARE OIL 25ML",
//             "harga" => "Rp 81.174,- / Pcs",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Obat Demam"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20230120013544359225_BIOACNE-1.png",
//             "product_box_URL" => "bioacne-10g-2482",
//             "nama_obat" => "BIOACNE 10G",
//             "harga" => "Rp 35.728,- / Tube",
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Pereda Nyeri"
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/970025.jpg",
//             "product_box_URL" => "biobran-tablet-30s-1274",
//             "nama_obat" => "BIOBRAN TABLET",
//             "harga" => "Rp 87.085,- / Strip",
//             "jenis_obat" => 'Tablet',
//             "kategori_obat" => "Obat Demam"
//         ],

//     ];

//     $artikel = [
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/12/07090758/Tak-Hanya-Lezat-Ini-X-Manfaat-Kacang-Tanah-yang-Jarang-Diketahui-01.jpg.webp",
//             "judul" => "11 Manfaat Kacang Tanah untuk Kesehatan yang Jarang Diketahui",
//             "topik" => "Makanan Sehat",
//             "author" => "Dr.Boyke",
//             "tanggal_publish" => "24 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/07071402/Ini-X-Cara-Menurunkan-Berat-Badan-dengan-Cepat-01.jpg.webp",
//             "judul" => "13 Cara Menurunkan Berat Badan dengan Cepat dan Alami",
//             "topik" => "Diet dan Nutrisi",
//             "author" => "Dr.Tirtha",
//             "tanggal_publish" => "27 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/10/24055418/Ini-Penanganan-Gawat-Janin-untuk-Mencegah-Komplikasi-.jpg.webp",
//             "judul" => "Ini Penanganan Gawat Janin untuk Mencegah Komplikasi Kehamilan",
//             "topik" => "Kesehatan Fisik",
//             "author" => "Dr.Budi",
//             "tanggal_publish" => "12 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/10/24053515/ini-manfaat-sawi-putih-untuk-kesehatan-halodoc.jpg.webp",
//             "judul" => "Ini Manfaat Sawi Putih untuk Kesehatan",
//             "topik" => "Makanan Sehat",
//             "author" => "Dr. Sari",
//             "tanggal_publish" => "30 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/10/24042759/waktu-terbaik-memberikan-vaksin-hpv-pada-anak.jpg.webp",
//             "judul" => "Waktu Terbaik Memberikan Vaksin HPV pada Anak",
//             "topik" => "Kesehatan Anak",
//             "author" => "Dr. Rizal",
//             "tanggal_publish" => "28 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/24043720/berapa-kalori-nasi-goreng-yang-aman-untuk-dikonsumsi-1.jpg.webp",
//             "judul" => "Berapa Kalori Nasi Goreng yang Aman untuk Dikonsumsi?",
//             "topik" => "Diet dan Nutrisi",
//             "author" => "Dr. Tirtha",
//             "tanggal_publish" => "24 November 2022",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/10/23010724/X-Pola-Hidup-Sehat-Agar-Kadar-Kolesterol-Selalu-Normal.jpg.webp",
//             "judul" => "Ketahui Kadar Kolesterol Normal Berdasarkan Usia dan Jenis Kelamin",
//             "topik" => "Diet dan Nutrisi",
//             "author" => "Dr.Tirtha",
//             "tanggal_publish" => "18 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/10/20061220/Ini-Kunci-Umur-Panjang-Penduduk-yang-Tinggal-di-Negara-Blue-Zone.jpg.webp",
//             "judul" => "Ini Kunci Umur Panjang Penduduk yang Tinggal di Negara Blue Zone",
//             "topik" => "Kesehatan Fisik",
//             "author" => "Dr. Boyke",
//             "tanggal_publish" => "10 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/01/06045423/ketahui-cara-tepat-memilih-facial-wash-untuk-remaja-halodoc.jpg.webp",
//             "judul" => "Ini Urutan Skincare Malam Remaja Agar Kulit Sehat dan Cerah",
//             "topik" => "Kesehatan Fisik",
//             "author" => "Dr.Boyke",
//             "tanggal_publish" => "02 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//         [
//             "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/01/19040153/Adakah-Manfaat-Menyanyikan-Lagu-Nina-Bobo-untuk-Bayi_.jpg.webp",
//             "judul" => "Adakah Manfaat Menyanyikan Lagu Nina Bobo untuk Bayi?",
//             "topik" => "Kesehatan Anak",
//             "author" => "Dr. Sari",
//             "tanggal_publish" => "27 Oktober 2023",
//             "deskripsi" => "“Gawat janin menjadi kondisi yang berbahaya bagi janin dalam kandungan. Kondisi ini dapat memicu berbagai komplikasi, seperti kerusakan otak, cerebral palsy, hingga stillbirth.”"
//         ],
//     ];

//     $testimoni = [
//         [
//             "image" => "https://cliply.co/wp-content/uploads/2020/08/442008111_GLANCING_AVATAR_3D_400.png",
//             "nama" => "Candra Sihotang",
//             "ulasan" => "Situs web apotek ini luar biasa. Saya dapat dengan cepat menemukan obat yang saya butuhkan, dan proses pembeliannya sangat mudah. Pesanan saya tiba dalam waktu singkat.",
//             "rating" => 5
//         ],
//         [
//             "image" => "https://cdn3d.iconscout.com/3d/premium/thumb/men-with-red-cloth-4929602-4118345.png",
//             "nama" => "Tio Pramudya",
//             "ulasan" => "Situs web ini memiliki antarmuka pengguna yang sangat mudah digunakan. Saya dapat dengan cepat menemukan produk yang saya cari, dan fitur pencarian mereka sangat membantu.",
//             "rating" => 4
//         ],
//         [
//             "image" => "https://th.bing.com/th/id/OIP.M9W_NylhFNtCyTRJxJYZbgAAAA?pid=ImgDet&w=450&h=450&rs=1",
//             "nama" => "Dendy Pramartha",
//             "ulasan" => "Harga obat-obatan di situs web ini sangat bersaing. Saya selalu merasa bahwa saya mendapatkan nilai yang baik untuk uang saya. Tidak perlu membayar lebih mahal di apotek fisik.",
//             "rating" => 5
//         ],
//         [
//             "image" => "https://cdn3d.iconscout.com/3d/premium/thumb/entrepreneur-men-4929605-4118348.png",
//             "nama" => "Dr. Tirta",
//             "ulasan" => "Saya suka berbelanja di sini karena mereka menawarkan beragam produk kesehatan, mulai dari obat-obatan hingga suplemen vitamin. Saya dapat dengan mudah menemukan semua yang saya butuhkan dalam satu tempat.",
//             "rating" => 4
//         ],
//     ];

//     $user = [
//         [
//             "id" => 1,
//             "profile" => "https://cliply.co/wp-content/uploads/2020/08/442008111_GLANCING_AVATAR_3D_400.png",
//             "nama" => "Candra Sihotang",
//             "tgl_lahir" => "3 Maret 2003",
//             "email" => "candraSihotang12@gmail.com",
//             "jenis_kelamin" => "Pria",
//             "no_hp" => "089456123789",
//             "alamat" => [
//                 [
//                     "alamat_lengkap" => "Jalan Melati No. 456, Desa Harapan Jaya, Kabupaten Mawar Sejahtera, Provinsi Cinta Damai",
//                 ],
//                 [
//                     "alamat_lengkap" => "Jalan Mawar No. 123, Desa Bunga Indah, Kabupaten Serumpun, Provinsi Damai Sejati",
//                 ],
//                 [
//                     "alamat_lengkap" => "Jalan Anggrek 789, Desa Mekar Sari, Kabupaten Bunga Abadi, Provinsi Sejuk Indah",
//                 ],
//                 [
//                     "alamat_lengkap" => "Jalan Dahlia 101, Desa Sentosa Makmur, Kabupaten Teratai Bahagia, Provinsi Surga Damai",
//                 ]
//             ]
//         ]
//     ];

//     $keranjang = [
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201806080341004677_aludonna-d-SYR.jpg",
//             "product_box_URL" => "aludonna-d-susp-150ml-10149",
//             "nama_obat" => "ALUDONNA D SUSP 150ML",
//             "harga" => 12000,
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Flu dan Batuk",
//             "golongan" => "bebas",
//             "jumlah" => 3
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_201610040210071922_386-Aludonna.jpg",
//             "product_box_URL" => "aludonna-d-tab-160s-3873",
//             "nama_obat" => "ALUDONNA D TABLET",
//             "harga" => 5232,
//             "jenis_obat" => 'Tablet',
//             "kategori_obat" => "Obat Demam",
//             "golongan" => "terbatas",
//             "jumlah" => 4
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_2016022503274913_aludonna.jpg",
//             "product_box_URL" => "aludonna-susp-150ml-1604",
//             "nama_obat" => "ALUDONNA SUSP 150ML",
//             "harga" => 12000,
//             "jenis_obat" => 'Sirup',
//             "kategori_obat" => "Flu dan Batuk",
//             "golongan" => "keras",
//             "jumlah" => 5
//         ],
//         [
//             "image" => "https://images.k24klik.com/product/apotek_online_k24klik_20190619082944209249_3.-ALUDONNA.jpg",
//             "product_box_URL" => "aludonna-tab-100s-9205",
//             "nama_obat" => "ALUDONNA TABLET",
//             "harga" => 12000,
//             "jenis_obat" => 'Kapsul',
//             "kategori_obat" => "Pereda Nyeri",
//             "golongan" => "keras",
//             "jumlah" => 1
//         ],
//     ];

//     session(['keranjang' => $keranjang]);


//     session(['user' => $user]);
//     session(['daftarObat' => $obat]);
//     session(['daftarArtikel' => $artikel]);
//     session(['testimoni' => $testimoni]);


//     return view('home', [
//         "title" => "Home",
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'obat' => $obat,
//         'artikel' => $artikel,
//         'testimoni' => $testimoni,
//         'keranjang' => session('keranjang')
//     ]);
// })->name('home');

// Route::get('/daftarObat', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => '',
//     ]);
// });
// Route::get('/daftarObatSirup', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Sirup',
//     ]);
// });
// Route::get('/daftarObatKapsul', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Kapsul',
//     ]);
// });
// Route::get('/daftarObatTablet', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Tablet',
//     ]);
// });
// Route::get('/daftarObatDemam', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Obat Demam',
//     ]);
// });
// Route::get('/daftarObatPeredaNyeri', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Pereda Nyeri',
//     ]);
// });
// Route::get('/daftarObatAntiAlergi', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Obat Anti Alergi',
//     ]);
// });
// Route::get('/daftarObatAntibiotik', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Antibiotik',
//     ]);
// });
// Route::get('/daftarObatFludanBatuk', function () {

//     $obat = session('daftarObat');
//     return view('daftarObat', [
//         "title" => "DaftarObat",
//         'userLogin' => session('userLogint'),
//         "obat" => $obat,
//         'user' => session('user'),
//         'sort_by' => 'Flu dan Batuk',
//     ]);
// });

// Route::get('/artikelDetail', function () {
//     $artikel = session('daftarArtikel');
//     return view('detailArtikel', [
//         "title" => "Artikel",
//         "artikel" => $artikel,
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'sort_by' => '',
//     ]);
// });
// Route::get('/artikel', function () {
//     $artikel = session('daftarArtikel');
//     return view('artikel', [
//         "title" => "Artikel",
//         "artikel" => $artikel,
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'sort_by' => '',
//     ]);
// });
// Route::get('/artikelMakananSehat', function () {
//     $artikel = session('daftarArtikel');
//     return view('artikel', [
//         "title" => "Artikel",
//         "artikel" => $artikel,
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'sort_by' => 'Makanan Sehat',
//     ]);
// });
// Route::get('/artikelDiet', function () {
//     $artikel = session('daftarArtikel');
//     return view('artikel', [
//         "title" => "Artikel",
//         "artikel" => $artikel,
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'sort_by' => 'Diet dan Nutrisi',
//     ]);
// });
// Route::get('/artikelKesehatanFisik', function () {
//     $artikel = session('daftarArtikel');
//     return view('artikel', [
//         "title" => "Artikel",
//         "artikel" => $artikel,
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'sort_by' => 'Kesehatan Fisik',
//     ]);
// });
// Route::get('/artikelKesehatanAnak', function () {
//     $artikel = session('daftarArtikel');
//     return view('artikel', [
//         "title" => "Artikel",
//         "artikel" => $artikel,
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'sort_by' => 'Kesehatan Anak',
//     ]);
// });

// Route::get('/tentangKami', function () {
//     return view('tentangKami', [
//         "title" => "Tentang Kami",
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//     ]);
// });

// Route::get('/profile', function () {

//     return view('profile', [
//         "title" => "Profile",
//         "user" => session('user'),
//         'userLogin' => session('userLogint'),
//     ]);
// })->name('profile');

// Route::post('/profileUpdate', function (Illuminate\Http\Request $request) {
//     $name = $request->input('nama');
//     $email = $request->input('email');
//     $noHp = $request->input('noHp');
//     $tglLahir = $request->input('tglLahir');
//     $gender = $request->input('gender');
//     $image = $request->file('image');
//     $user = $request->session()->get('user');
//     if ($request->hasFile('image')) {

//         $imagePath =  $image->move(public_path('images'), $image->getClientOriginalName());
//         $imageUrl = asset('images/' . $image->getClientOriginalName());
//         $user[0]['profile'] = $imageUrl;
//     }



//     $user[0]['nama'] = $name;
//     $user[0]['email'] = $email;
//     $user[0]['noHp'] = $noHp;
//     $user[0]['tgl_lahir'] = $tglLahir;
//     $user[0]['jenis_kelamin'] = $gender;

//     $request->session()->put('user', $user);

//     return redirect()->route('profile')->with('success', 'Data sesi diperbarui.');
// })->name('profileUpdate');

// Route::get('/daftarAlamat', function () {
//     return view('daftarAlamat', [
//         "title" => "Daftar Alamat",
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'checked' => ''
//     ]);
// });
// Route::get('/daftarAlamatChecked', function () {
//     return view('daftarAlamat', [
//         "title" => "Daftar Alamat",
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'checked' => 'check'
//     ]);
// });

// Route::get('/keranjang', function () {
//     return view('keranjang', [
//         "title" => "Keranjang Belanja",
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//         'keranjang' =>  session('keranjang')
//     ]);
// });
// Route::get('/testimoni', function () {
//     return view('testimoni', [
//         "title" => "Testimoni",
//         'userLogin' => session('userLogint'),
//         'user' => session('user'),
//     ]);
// });

// Route::get('/login', function () {
//     $userLogin = [
//         [
//             "email" => '',
//             "password" => '',
//         ]
//     ];
//     session(['userLogint' => $userLogin]);

//     return view('login', [
//         'userLogin' => session('userLogin'),
//     ]);
// })->name('login');

// Route::post('/loginCheck', function (Illuminate\Http\Request $request) {

//     $email = $request->input('email');
//     $password = $request->input('password');
//     if ($email == '' || $password == '') {
//         return redirect()->back()->with('error', 'Gagal Login');
//     } else {
//         $userLogin = $request->session()->get('userLogint');
//         $userLogin[0]['email'] = $email;
//         $userLogin[0]['password'] = $password;
//         $request->session()->put('userLogint', $userLogin);
//         return redirect()->route('home');
//     }
// })->name('loginCheck');

// Route::post('/logout', function (Illuminate\Http\Request $request) {

//     $userLogin = $request->session()->get('userLogint');
//     $userLogin[0]['email'] = '';
//     $userLogin[0]['password'] = '';
//     $request->session()->put('userLogint', $userLogin);

//     return redirect()->route('home');
// })->name('logout');



// Route::get('/transaksi', function () {

//     $ulasan = [
//         [
//             'nama' => 'user1',
//             'pesan' => 'obat sangat manjur, admin ramah dan baik',
//             'bintang' => 5,
//             'waktu' => 'senin, 12 januari 2012'
//         ],
//         [
//             'nama' => 'user2',
//             'pesan' => 'obat murah dan asli, admin ramah dan baik',
//             'bintang' => 4,
//             'waktu' => 'minggu, 14 febuari 2012'
//         ],
//         [
//             'nama' => 'user3',
//             'pesan' => 'pengiriman cepat, pilihan obat banyak',
//             'bintang' => 5,
//             'waktu' => 'kamis, 14 maret 2012'
//         ]
//     ];

//     session(['ulasan' => $ulasan]);
//     $obat = session('daftarObat');

//     return view(
//         'transaksi',
//         [
//             'title' => 'Transaksi',
//             'user' => session('user'),
//             'obat' => $obat,
//             'ulasan' => $ulasan,
//             'keranjang' => session('keranjang'),
//         ]
//     );
// });

// Route::get('/halamanBeli', function () {
//     $alamat = [
//         [
//             "alamat_lengkap" => "Jalan Melati No. 456, Desa Harapan Jaya, Kabupaten Mawar Sejahtera, Provinsi Cinta Damai",
//         ],
//         [
//             "alamat_lengkap" => "Jalan Mawar No. 123, Desa Bunga Indah, Kabupaten Serumpun, Provinsi Damai Sejati",
//         ],
//         [
//             "alamat_lengkap" => "Jalan Anggrek 789, Desa Mekar Sari, Kabupaten Bunga Abadi, Provinsi Sejuk Indah",
//         ],
//         [
//             "alamat_lengkap" => "Jalan Dahlia 101, Desa Sentosa Makmur, Kabupaten Teratai Bahagia, Provinsi Surga Damai",
//         ]
//     ];

//     $MetodePembayaran = [
//         [
//             "metode" => "BCA"
//         ],
//         [
//             "metode" => "BRI"
//         ],
//         [
//             "metode" => "MANDIRI"
//         ],
//         [
//             "metode" => "COD"
//         ]
//     ];


//     session(['alamat' => $alamat]);
//     session(['MetodePembayaran' => $MetodePembayaran]);
//     return view(
//         'halamanBeli',
//         [
//             'title' => 'Beli',
//             'user' => session('user'),
//             'keranjang' => session('keranjang'),
//             'alamat' => $alamat,
//             'MetodePembayaran' => $MetodePembayaran
//         ]
//     );
// });

// Route::get('/pembayaran', function () {
//     $keranjang = session('keranjang');
//     return view(
//         'pembayaran',
//         [
//             'title' => 'Pembayaran',
//             'user' => session('user'),
//             'keranjang' => $keranjang
//         ]
//     );
// });

// Route::get('/admin', function () {
//     return view('admin');
// });





// Route::get('/customers', function () {
//     return view(
//         'Admin/customers',

//     );
// });

// Route::get('/users', function () {
//     return view(
//         'Admin/users',
//     );
// });

// Route::get('/products', function () {
//     return view(
//         'Admin/products',
//     );
// });

// Route::get('/transactions_stockIn', function () {
//     return view(
//         'Admin/transactions_stockIn',
//     );
// });

// Route::get('/transactions_stockOut', function () {
//     return view(
//         'Admin/transactions_stockOut'
//     );
// });

// Route::get('/reports_sales', function () {
//     return view(
//         'Admin/reports_sales'
//     );
// });

// Route::get('/reports_stockIn', function () {
//     return view(
//         'Admin/reports_stockIn'
//     );
// });
