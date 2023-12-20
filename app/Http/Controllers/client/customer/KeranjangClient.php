<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\Detail_Transaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

session_start();
class KeranjangClient extends Controller
{
    public function gotoKeranjang(Request $request)
    {
        $transaksi = Transaksi::where('id_user', auth()->user()->id)->first();
        $id = $transaksi['id'];

        // try {

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

        return view('keranjang', ['keranjang' => $data]);
        // } catch (\Exception $e) {
        //     return view('keranjang', []);
        // }
    }
}
