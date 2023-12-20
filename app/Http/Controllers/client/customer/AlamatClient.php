<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\Alamat;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;

session_start();
class AlamatClient extends Controller
{

    public function gotoAlamat(Request $request)
    {

        $user = User::where('id', auth()->user()->id)->first();

        // try {

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/alamat";
        $response = $client->request('get', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ]
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $alamat = $contentArray["data"];
        return view('daftarAlamat', ['alamat' => $alamat, 'user' => $user]);
        // } catch (\Exception $e) {
        //     return view('daftarAlamat', []);
        // }
    }

    public function show(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/alamat/$id";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $alamat = $contentArray["data"];

            return view('alamat', ['alamat' => $alamat]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('alamat', ['alamat' => []]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/alamat/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $alamat = $contentArray["data"];
            Session::flash('message', 'Berhasil Menghapus Data Alamat');
            return redirect()->route('alamatIndex', ['alamat' => $alamat]);
        } catch (\Exception $e) {
            return redirect()->route('alamatIndex');
        }
    }

    public function store(Request $request)
    {
        $deskripsi = $request->deskripsi;

        $parameter = [
            'id_user' => auth()->user()->id,
            'deskripsi' => $deskripsi,
        ];

        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/alamat";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $alamat = $contentArray["data"];
            Session::flash('message', 'Berhasil Menambah Data Alamat');
            return redirect()->route('gotoAlamat', ['alamat' => $alamat]);
        } catch (\Exception $e) {
            return redirect()->route('gotoAlamat');
        }
    }

    public function update(Request $request, string $id)
    {
        $deskripsi = $request->deskripsi;

        $parameter = [
            'deskripsi' => $deskripsi,
        ];
        // try {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/alamat/$id";
        $response = $client->request('PUT', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ],
            'body' => json_encode($parameter),
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $alamat = $contentArray["data"];
        Session::flash('message', 'Berhasil Memperbarui Data Alamat');

        return redirect()->route('gotoAlamat', ['alamat' => $alamat]);
        // } catch (\Exception $e) {
        //     return redirect()->route('gotoAlamat');
        // }
    }
}
