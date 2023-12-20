<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengadaan;
use App\Models\Obat;
use App\Models\Pengadaan_Obat;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use \Illuminate\Support\Facades\Session;

session_start();
class DetailPengadaanClient extends Controller
{
    public function index(Request $request)
    {
        $id = $request->idPengadaan;
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/detailPengadaan";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);

            $pengadaan = Pengadaan_Obat::with('supplier')->where('id', $id)->first();
            $detailPengadaan = Detail_Pengadaan::where('id_pengadaan', $pengadaan['id'])->get();
            $obat = Obat::all();

            return view('Admin.pengadaan.pengadaanObat', ['pengadaan' => $pengadaan, 'detailPengadaan' => $detailPengadaan, 'obat' => $obat]);
        } catch (\Exception $e) {
            return view('Admin.products', ['obat' => []]);
        }
    }

    public function store(Request $request)
    {

        $id_obat = $request->obat;
        $id_pengadaan = $request->idPengadaan;
        $jumlah_obat = $request->jumlah_obat;

        try {
            $client = new Client();
            $pengadaan = Pengadaan_Obat::with('supplier')->where('id', $id_pengadaan)->first();
            $checkProduk = Detail_Pengadaan::with('obat')->where('id_pengadaan', $pengadaan['id'])->where('id_obat', $id_obat)->first();

            if (is_null($checkProduk)) {
                $parameter = [
                    'id_pengadaan' => $id_pengadaan,
                    'id_obat' => $id_obat,
                    'jumlah_obat' => $jumlah_obat
                ];
                $url = "http://127.0.0.1:8000/api/detailPengadaan";
                $response = $client->request('POST', $url, [
                    'headers' => [
                        'Content-type' => 'application/json',
                        'Authorization' => 'Bearer ' . $_SESSION['access_token']
                    ],
                    'body' => json_encode($parameter),
                ]);
                $content = $response->getBody()->getContents();
                Session::flash('message', 'Berhasil Menambah Data Supplier');
                $detailPengadaan = Detail_Pengadaan::with('obat')->where('id_pengadaan', $pengadaan['id'])->get();
                $obat = Obat::all();
            } else {
                $id = $checkProduk['id'];
                $parameter = [
                    'id_pengadaan' => $id_pengadaan,
                    'id_obat' => $id_obat,
                    'jumlah_obat' => $jumlah_obat + $checkProduk['jumlah_obat']
                ];
                $url = "http://127.0.0.1:8000/api/detailPengadaan/$id";
                $response = $client->request('PUT', $url, [
                    'headers' => [
                        'Content-type' => 'application/json',
                        'Authorization' => 'Bearer ' . $_SESSION['access_token']
                    ],
                    'body' => json_encode($parameter),
                ]);
                $content = $response->getBody()->getContents();
                $detailPengadaan = Detail_Pengadaan::with('obat')->where('id_pengadaan', $pengadaan['id'])->get();
                $obat = Obat::all();
            }

            return view('Admin/pengadaan/pengadaanObat', ['pengadaan' => $pengadaan, 'detailPengadaan' => $detailPengadaan, 'obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('pengadaanShow');
        }
    }

    public function destroy(Request $request)
    {
        $id_pengadaan = $request->idPengadaan;
        // try {
        $id = $request->idDetailPengadaan;
        $pengadaan = Pengadaan_Obat::with('supplier')->where('id', $id_pengadaan)->first();
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/detailPengadaan/$id";
        $response = $client->request('Delete', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ],
        ]);
        $content = $response->getBody()->getContents();

        Session::flash('message', 'Berhasil Menghapus Data Produk');

        $detailPengadaan = Detail_Pengadaan::with('obat')->where('id_pengadaan', $pengadaan['id'])->get();
        $obat = Obat::all();
        return view('Admin/pengadaan/pengadaanObat', ['pengadaan' => $pengadaan, 'detailPengadaan' => $detailPengadaan, 'obat' => $obat]);
        // } catch (\Exception $e) {
        //     return redirect()->route('pengadaanShow');
        // }
    }
}
