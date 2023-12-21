<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

session_start();
class TransaksiClient extends Controller
{
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/transaksi";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $transaksi = $contentArray["data"];

            return view('transaksi', ['pengadaan' => $transaksi]);
        } catch (\Exception $e) {
            return view('transaksi', ['pengadaan' => []]);
        }
    }

    public function store(Request $request)
    {
        $id_user = auth()->user()->id;
        $tanggal_transaksi = now()->format('Y-m-d H:i:s');

        $parameter = [
            'id_user' => $id_user,
            'tanggal_transaksi' => $tanggal_transaksi,
            'status' => 0
        ];

        // try {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/transaksi";
        $response = $client->request('POST', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ],
            'body' => json_encode($parameter),
        ]);

        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray["data"];
        // ========================================================================================================================

        $parameter_detailTransaksi = [
            'id_transaksi' => $data['id'],
            'id_obat' => $request->idObat,
            'jumlah_obat' => $request->countValue
        ];


        $url = "http://127.0.0.1:8000/api/keranjang";
        $response = $client->request('POST', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ],
            'body' => json_encode($parameter_detailTransaksi),
        ]);
        $keranjang = $response->getBody()->getContents();
        $keranjangArray = json_decode($keranjang, true);
        $detailTransaksi = $keranjangArray["data"];

        toastr()->success('Berhasil Membuat Satu Transaksi');
        return redirect()->route('gotoKeranjang', ['transaksi' => $data, 'keranjang' => $detailTransaksi]);
        // } catch (\Exception $e) {
        //     return redirect()->route('gotoKeranjang', ['transaksi' => [], 'keranjang' => []]);
        // }
    }
}
