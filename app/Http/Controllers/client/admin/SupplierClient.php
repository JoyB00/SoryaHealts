<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Authenticate;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

session_start();
class SupplierClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/suppliers";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $pemasok = $contentArray["data"];

            return view('Admin.suppliers', ['pemasok' => $pemasok]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('Admin.suppliers', ['pemasok' => []]);
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
            $url = "http://127.0.0.1:8000/api/suppliers";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $pemasok = $contentArray["data"];
            toastr()->success('Berhasil Menambahkan Data Supplier');
            return redirect()->route('supplierIndex', ['pemasok' => $pemasok]);
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
            $url = "http://127.0.0.1:8000/api/suppliers/$id";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $pemasok = $contentArray["data"];

            return view('Admin.suppliers', ['pemasok' => $pemasok]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('Admin.suppliers', ['pemasok' => []]);
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
            $url = "http://127.0.0.1:8000/api/suppliers/$id";
            $response = $client->request('PUT', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $pemasok = $contentArray["data"];
            toastr()->success('Berhasil Memperbarui Data Supplier');

            return redirect()->route('supplierIndex', ['pemasok' => $pemasok]);
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
            $url = "http://127.0.0.1:8000/api/suppliers/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $pemasok = $contentArray["data"];
            toastr()->success('Berhasil Menghapus Data Supplier');
            return redirect()->route('supplierIndex', ['pemasok' => $pemasok]);
        } catch (\Exception $e) {
            return redirect()->route('supplierIndex');
        }
    }
}
