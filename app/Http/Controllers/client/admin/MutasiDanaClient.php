<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengadaan;
use App\Models\Detail_Transaksi;
use App\Models\Mutasi_Dana;
use App\Models\Obat;
use App\Models\Pengadaan_Obat;
use App\Models\Supplier;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use \Illuminate\Support\Facades\Session;

session_start();
class MutasiDanaClient extends Controller
{
    public function indexPembelian()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/mutasiPembelian";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $mutasiDana = $contentArray["data"];
            if (!is_null($mutasiDana)) {
                $detailPengadaan = Detail_Pengadaan::join('pengadaan_obats', 'detail_pengadaans.id_pengadaan', '=', 'pengadaan_obats.id')
                    ->where('pengadaan_obats.status', 1)
                    ->get();
            }
            return view('Admin.reports_pembelian', ['mutasiDana' => $mutasiDana, 'detailPengadaan' => $detailPengadaan]);
        } catch (\Exception $e) {
            return view('Admin.reports_pembelian', ['mutasiDana' => []]);
        }
    }
    public function indexPenjualan()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/mutasiPenjualan";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $mutasiDana = $contentArray["data"];
            if (!is_null($mutasiDana)) {
                $detailTransaksi = Detail_Transaksi::join('transaksis', 'detail_transaksis.id_transaksi', '=', 'transaksis.id')
                    ->where('transaksis.status', 1)
                    ->get();
            }

            return view('Admin.reports_penjualan', ['mutasiDana' => $mutasiDana, 'detailTransaksi' => $detailTransaksi]);
        } catch (\Exception $e) {
            return view('Admin.reports_penjualan', ['mutasiDana' => []]);
        }
    }

    public function storePengadaan(Request $request)
    {
        $idPengadaan = $request->idPengadaan;
        $totalHarga = $request->totalHarga;

        $current_mutasiDana = Mutasi_Dana::all()->last();
        $pengadaan = Pengadaan_Obat::where('id', $idPengadaan)->first();
        $detail_pengadaan = Detail_Pengadaan::where('id_pengadaan', $idPengadaan)->get();

        $parameter = [
            'id_pengadaan' => $idPengadaan,
            'detail_mutasi' => "Pengadaan Obat Apotek",
            'saldo' => $current_mutasiDana['saldo'] - $totalHarga,
        ];
        try {

            $client = new Client();
            $url = "http://127.0.0.1:8000/api/mutasiDana";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();

            $pengadaan['status'] = 1;
            $pengadaan->save();

            $detail_pengadaan->each(function ($item) {
                $obat = Obat::find($item['id_obat']);
                $obat['stok_obat'] = $obat['stok_obat'] + $item['jumlah_obat'];
                $obat->save();
            });


            toastr()->success('Berhasil Melakukan Pengadaan Obat');
            $supplier = Supplier::all();
            $pengadaanAll =  Pengadaan_Obat::all();

            return view('Admin.transactions_stockIn', ['pengadaan' => $pengadaanAll, 'suppliers' => $supplier]);
        } catch (\Exception $e) {
            return redirect()->route('Admin.transactions_stockIn');
        }
    }

    public function storeTransaksiUser(Request $request)
    {
        $idTransaksi = $request->idTransaksi;
        $totalHarga = $request->totalHarga;

        $current_mutasiDana = Mutasi_Dana::all()->last();
        $transaksi = Transaksi::where('id', $idTransaksi)->first();
        $detail_transaksi = Detail_Transaksi::where('id_transaksi', $idTransaksi)->get();

        $parameter = [
            'id_transaksi' => $idTransaksi,
            'detail_mutasi' => "Transaksi Obat User Apotek",
            'saldo' => $current_mutasiDana['saldo'] + $totalHarga,
        ];
        try {

            $client = new Client();
            $url = "http://127.0.0.1:8000/api/mutasiDana";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $transaksi['status'] = 1;
            $transaksi->save();

            $detail_transaksi->each(function ($item) {
                $obat = Obat::find($item['id_obat']);
                $obat['stok_obat'] = $obat['stok_obat'] - $item['jumlah_obat'];
                $obat->save();
            });
            toastr()->success('Berhasil Melakukan Transaksi Obat');
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
