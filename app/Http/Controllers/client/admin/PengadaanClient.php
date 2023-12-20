<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengadaan;
use App\Models\Obat;
use App\Models\Pengadaan_Obat;
use App\Models\Supplier;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

session_start();
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
            $supplier = Supplier::all();


            return view('Admin.transactions_stockIn', ['pengadaan' => $pengadaan, 'suppliers' => $supplier]);
        } catch (\Exception $e) {
            return view('Admin.transactions_stockIn', ['pengadaan' => []]);
        }
    }

    public function store(Request $request)
    {

        $id_supplier = $request->supplier;
        $tanggal_pengadaan = now()->format('Y-m-d H:i:s');

        $parameter = [
            'id_supplier' => $id_supplier,
            'tanggal_pengadaan' => $tanggal_pengadaan,
            'status' => 0,
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
            $data = $contentArray["data"];
            Session::flash('message', 'Berhasil Menambah Data Supplier');

            $pengadaan = Pengadaan_Obat::with('supplier')->where('id', $data['id'])->first();

            $detailPengadaan = Detail_Pengadaan::where('id_pengadaan', $pengadaan['id'])->get();

            $obat = Obat::all();

            return view('Admin/pengadaan/pengadaanObat', ['pengadaan' => $pengadaan, 'detailPengadaan' => $detailPengadaan, 'obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('pengadaanShow');
        }
    }

    public function show(Request $request)
    {

        try {
            $id = $request->idPengadaan;
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/pengadaanObatDetail/$id";
            $response = $client->request('get', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);

            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $data = $contentArray["data"];

            $detailPengadaan = Detail_Pengadaan::where('id_pengadaan', $data['id'])->get();
            $obat = Obat::all();

            return view('Admin.pengadaan.pengadaanObat', ['pengadaan' => $data, 'detailPengadaan' => $detailPengadaan, 'obat' => $obat]);
        } catch (\Exception $e) {
            return view('Admin.pengadaan.pengadaanObat');
        }
    }

    public function destroy(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/pengadaanObat/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $pengadaan = $contentArray["data"];
            Session::flash('message', 'Berhasil Menghapus Data Supplier');

            return redirect()->route('pengadaanIndex', ['pengadaan' => $pengadaan]);
        } catch (\Exception $e) {
            return redirect()->route('pengadaanIndex', []);
        }
    }

    public function gotoTambahObat(Request $request)
    {
        $id = $request->idPengadaan;
        return view("Admin.pengadaan.tambahObat", ['id_pengadaan' => $id]);
    }
}
