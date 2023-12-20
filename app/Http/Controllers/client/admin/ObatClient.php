<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengadaan;
use App\Models\Obat;
use App\Models\Pengadaan_Obat;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

session_start();
class ObatClient extends Controller
{
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/obat";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $obat = $contentArray["data"];
            return view('Admin.products', ['obat' => $obat]);
        } catch (\Exception $e) {
            return view('Admin.products', ['obat' => []]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $namaObat = $request->namaObat;
        $golonganObat = $request->golonganObat;
        $jenisObat = $request->jenisObat;
        $kategoriObat = $request->kategoriObat;
        $dosisObat = $request->dosisObat;
        $deskripsiObat = $request->deskripsiObat;
        $hargaObat = $request->hargaObat;
        $idPengadaan = $request->idPengadaan;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath =  $image->move(public_path('public/images/obat'), $image->getClientOriginalName());
            $imageUrl = $image->getClientOriginalName();
        }

        $parameter = [
            'nama_obat' => $namaObat,
            'golongan_obat' => $golonganObat,
            'jenis_obat' => $jenisObat,
            'kategori_obat' => $kategoriObat,
            'dosis' => $dosisObat,
            'deskripsi' => $deskripsiObat,
            'stok_obat' => 0,
            'harga_obat' => $hargaObat,
            'gambar_obat' => $imageUrl,
        ];


        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/obat";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $obat = $contentArray["data"];


            Session::flash('message', 'Berhasil Menambah Data Supplier');
            $pengadaan = Pengadaan_Obat::with('supplier')->where('id', $idPengadaan)->first();
            $detailPengadaan = Detail_Pengadaan::where('id_pengadaan', $pengadaan['id'])->get();
            $obat = Obat::all();

            return view('Admin/pengadaan/pengadaanObat', ['pengadaan' => $pengadaan, 'detailPengadaan' => $detailPengadaan, 'obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('supplierIndex');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->id_obat;

        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/obat/$id";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $obat = $contentArray["data"];

            $transaksi = Transaksi::where('id_user', auth()->user()->id)->first();
            return view('transaksi', ['obat' => $obat, 'transaksi' => $transaksi]);
        } catch (\Exception $e) {
            return view('transaksi', ['obat' => []]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $obat = Obat::where('id', $id)->first();

        $namaObat = $request->namaObat;
        $golonganObat = $request->golonganObat;
        $jenisObat = $request->jenisObat;
        $kategoriObat = $request->kategoriObat;
        $dosisObat = $request->dosisObat;
        $deskripsiObat = $request->deskripsiObat;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath =  $image->move(public_path('public/images/obat'), $image->getClientOriginalName());
            $imageUrl = $image->getClientOriginalName();
        } else {
            $imageUrl = $obat['gambar_obat'];
        }

        $parameter = [
            'nama_obat' => $namaObat,
            'golongan_obat' => $golonganObat,
            'jenis_obat' => $jenisObat,
            'kategori_obat' => $kategoriObat,
            'dosis' => $dosisObat,
            'deskripsi' => $deskripsiObat,
            'gambar_obat' => $imageUrl,
        ];


        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/obat/$id";
            $response = $client->request('PUT', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $obat = $contentArray["data"];

            return redirect()->route('obatIndex', ['obat' => $obat]);
        } catch (\Exception $e) {
            return route('obatIndex', ['obat' => []]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/obat/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $obat = $contentArray["data"];
            Session::flash('message', 'Berhasil Menghapus Data Supplier');
            return redirect()->route('supplierIndex', ['obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('supplierIndex');
        }
    }
}
