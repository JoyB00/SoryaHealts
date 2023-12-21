<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

session_start();
class StafClient extends Controller
{
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/staf";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $pekerja = $contentArray["data"];

            return view('Admin.users', ['pekerja' => $pekerja]);
        } catch (\Exception $e) {
            return view('Admin.users', ['pekerja' => []]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $namaStaf = $request->namaStaf;
        $emailStaf = $request->emailStaf;
        $passwordStaf = $request->passwordStaf;

        $parameter = [
            'nama_staf' => $namaStaf,
            'email_staf' => $emailStaf,
            'password_staf' => $passwordStaf,
        ];
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/staf";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $staf = $contentArray["data"];
            toastr()->success('Berhasil Menambahkan Data Staf');
            return redirect()->route('stafIndex', ['staf' => $staf]);
        } catch (RequestException $e) {
            $errorResponse = json_decode($e->getResponse()->getBody()->getContents(), true);
            $errorMessage = $errorResponse['message'] ?? 'Terjadi kesalahan saat melakukan registrasi.';

            Session::flash('error', $errorMessage);

            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/staf/$id";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $staf = $contentArray["data"];

            return view('Admin.users', ['staf' => $staf]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('Admin.users', ['staf' => []]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $namaStaf = $request->nama_staf;
        $emailStaf = $request->email_staf;
        $passwordStaf = $request->password_staf;

        $parameter = [
            'nama_staf' => $namaStaf,
            'email_staf' => $emailStaf,
            'password_staf' => $passwordStaf,
        ];
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/staf/$id";
            $response = $client->request('PUT', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $staf = $contentArray["data"];
            toastr()->success('Berhasil Memperbarui Data Staf');

            return redirect()->route('stafIndex', ['staf' => $staf]);
        } catch (RequestException $e) {

            $errorResponse = json_decode($e->getResponse()->getBody()->getContents(), true);

            $errorMessage = 'Email Invalid or Already used' ?? 'Terjadi kesalahan saat melakukan registrasi.';

            Session::flash('error', $errorMessage);

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/staf/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $staf = $contentArray["data"];
            toastr()->success('Berhasil Menghapus Data Staf');
            return redirect()->route('stafIndex', ['staf' => $staf]);
        } catch (\Exception $e) {
            return redirect()->route('stafIndex');
        }
    } //
}
