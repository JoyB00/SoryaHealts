<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\Alamat;
use App\Models\Detail_Transaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

session_start();
class KeranjangClient extends Controller
{
    public function gotoKeranjang()
    {

        try {
            $transaksi = Transaksi::where('id_user', auth()->user()->id)->where('status', 0)->first();
            $id = $transaksi['id'];

            $client = new Client();
            $url = "http://127.0.0.1:8000/api/keranjang/$id";
            $response = $client->request('get', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);

            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $data = $contentArray["data"];

            return view('keranjang', ['keranjang' => $data, 'transaksi' => $transaksi]);
        } catch (\Exception $e) {
            return view('keranjang', ['keranjang' => []]);
        }
    }

    public function storeKeranjang(Request $request)
    {

        try {
            $transaksi = Transaksi::where('id_user', auth()->user()->id)->where('status', 0)->first();
            $idObat = $request->idObat;
            $checkProduk = Detail_Transaksi::with('obat')->where('id_transaksi', $transaksi['id'])->where('id_obat', $idObat)->first();

            if (is_null($checkProduk)) {

                $parameter_detailTransaksi = [
                    'id_transaksi' => $transaksi['id'],
                    'id_obat' => $request->idObat,
                    'jumlah_obat' => $request->countValue
                ];
                $client = new Client();
                $url = "http://127.0.0.1:8000/api/keranjang";
                $response = $client->request('POST', $url, [
                    'headers' => [
                        'Content-type' => 'application/json',
                        'Authorization' => 'Bearer ' . $_SESSION['access_token']
                    ],
                    'body' => json_encode($parameter_detailTransaksi),
                ]);
            } else {
                $id = $checkProduk['id'];
                $parameter_detailTransaksi = [
                    'id_transaksi' => $transaksi['id'],
                    'id_obat' => $request->idObat,
                    'jumlah_obat' => $request->countValue + $checkProduk['jumlah_obat']
                ];
                $client = new Client();
                $url = "http://127.0.0.1:8000/api/keranjang/$id";
                $response = $client->request('PUT', $url, [
                    'headers' => [
                        'Content-type' => 'application/json',
                        'Authorization' => 'Bearer ' . $_SESSION['access_token']
                    ],
                    'body' => json_encode($parameter_detailTransaksi),
                ]);
            }

            $keranjang = $response->getBody()->getContents();
            $keranjangArray = json_decode($keranjang, true);
            $detailTransaksi = $keranjangArray["data"];
            toastr()->success('Berhasil Memasukkan Ke Keranjang');
            return redirect()->route('gotoKeranjang', ['transaksi' => $transaksi, 'keranjang' => $detailTransaksi]);
        } catch (\Exception $e) {
            return redirect()->route('gotoKeranjang', ['transaksi' => [], 'keranjang' => []]);
        }
    }

    public function cekPembelian()
    {

        try {
            $transaksi = Transaksi::where('id_user', auth()->user()->id)->where('status', 0)->first();
            $alamat = Alamat::where('id_user', auth()->user()->id)->get();
            $id = $transaksi['id'];

            $client = new Client();
            $url = "http://127.0.0.1:8000/api/keranjang/$id";
            $response = $client->request('get', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);

            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $data = $contentArray["data"];

            return view('halamanBeli', ['keranjang' => $data, 'transaksi' => $transaksi, 'alamat' => $alamat]);
        } catch (\Exception $e) {
            return view('halamanBeli', ['keranjang' => []]);
        }
    }

    public function gotoPembayaran(Request $request)
    {

        try {

            $transaksi = Transaksi::where('id_user', auth()->user()->id)->where('status', 0)->first();
            $id = $transaksi['id'];

            $client = new Client();
            $url = "http://127.0.0.1:8000/api/keranjang/$id";
            $response = $client->request('get', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);

            $transaksi['metode_pembayaran'] = $request->metode;
            $transaksi['id_alamat'] = $request->alamat;
            $transaksi->save();

            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $data = $contentArray["data"];

            return view('pembayaran', ['keranjang' => $data, 'transaksi' => $transaksi]);
        } catch (\Exception $e) {
            return view('pembayaran', ['keranjang' => []]);
        }
    }

    public function destroy(Request $request)
    {
        $id = $request->idDetail;
        $index = $request->no;
        $detail_temp = Detail_Transaksi::where('id_transaksi', $id)->get();
        $id_detail = $detail_temp[$index - 1]['id'];

        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/keranjang/$id_detail";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $detailTransaksi = $contentArray["data"];

            return redirect()->route('gotoKeranjang', ['keranjang' => $detailTransaksi]);
        } catch (\Exception $e) {
            return redirect()->route('supplierIndex');
        }
    }
}
