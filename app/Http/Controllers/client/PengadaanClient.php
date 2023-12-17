<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

class PengadaanClient extends Controller
{
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/pengadaanObat";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $pengadaan = $contentArray["data"];

            return view('Admin.transactions_stockIn', ['pengadaan' => $pengadaan]);
        } catch (\Exception $e) {
            return view('Admin.transactions_stockIn', ['pengadaan' => []]);
        }
    }

    public function store(Request $request)
    {
        $nama_supplier = $request->supplierName;

        $supplier = Supplier::where('nama_supplier', $nama_supplier)->first();
        $id_supplier = $supplier->id;
        $tanggal_pengadaan = now();

        $parameter = [
            'id_supplier' => $id_supplier,
            'tanggal_pengadaan' => $tanggal_pengadaan,
        ];
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/pengadaanObat";
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
            return redirect()->route('pengadaanIndex', ['obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('pengadaanIndex');
        }
    }
}
