<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
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
        $nama_supplier = $request->supplierName;
        $no_telp_supplier = $request->phoneNumber;
        $email_supplier = $request->email;

        $parameter = [
            'nama_supplier' => $nama_supplier,
            'no_telp_supplier' => $no_telp_supplier,
            'email_supplier' => $email_supplier,
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
            return redirect()->route('supplierIndex', ['obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('supplierIndex');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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

            return view('Admin.suppliers', ['obat' => $obat]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('Admin.suppliers', ['obat' => []]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nama_supplier = $request->supplierName;
        $no_telp_supplier = $request->phoneNumber;
        $email_supplier = $request->email;

        $parameter = [
            'nama_supplier' => $nama_supplier,
            'no_telp_supplier' => $no_telp_supplier,
            'email_supplier' => $email_supplier,
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
            Session::flash('message', 'Berhasil Memperbarui Data Supplier');

            return redirect()->route('supplierIndex', ['obat' => $obat]);
        } catch (\Exception $e) {
            return redirect()->route('supplierIndex');
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
