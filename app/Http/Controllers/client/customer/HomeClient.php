<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Obat;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class HomeClient extends Controller
{
    public function getAllData()
    {
        $obat = Obat::inRandomOrder()->get();
        $testimoni = Testimoni::inRandomOrder()->get();
        $artikel = Artikel::inRandomOrder()->get();
        $userAll = User::where('role', 'customer')->get();

        return view('home', ['obat' => $obat, 'testimoni' => $testimoni, 'artikel' => $artikel, 'userAll' => $userAll]);
    }

    public function daftarObat()
    {
        $obat = Obat::inRandomOrder()->get();
        return view('daftarObat', ['obat' => $obat]);
    }

    public function formTestimoni()
    {
        // $testimoni = Testimoni::inRandomOrder()->get();
        return view('testimoni');
    }

    public function sortByJenisObat(Request $request)
    {

        $obat = Obat::where('jenis_obat', $request->jenis)->inRandomOrder()->get();
        return view('daftarObat', ['obat' => $obat]);
    }

    public function sortByKategoriObat(Request $request)
    {
        $obat = Obat::where('kategori_obat', $request->kategori)->inRandomOrder()->get();
        return view('daftarObat', ['obat' => $obat]);
    }


    public function artikel()
    {
        $artikel = Artikel::inRandomOrder()->get();
        return view('artikel', ['artikel' => $artikel, 'artikelByTopik' => []]);
    }

    public function tentangKami()
    {
        return view('tentangKami');
    }

    public function sortByTopikArtikel(Request $request)
    {

        $artikelByTopik = Artikel::where('topik', $request->topik)->inRandomOrder()->get();
        $artikel = Artikel::inRandomOrder()->get();
        return view('artikel', ['artikelByTopik' => $artikelByTopik, 'artikel' => $artikel]);
    }
}
