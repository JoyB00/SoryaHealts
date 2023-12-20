<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Session;

session_start();
class TestimoniClient extends Controller
{
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/testimoni";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);

            $content = $response->getBody()->getContents();
            // $data = json_decode($content, true);
            $contentArray = json_decode($content, true);

            $testimoni = $contentArray["data"];

            return view('testimoni', ['testimoni' => $testimoni]);
            // return view('home', compact('testimoni'));
        } catch (\Exception $e) {
            // Catch any other exceptions
            return view('testimoni', ['testimoni' => []]);
        }
    }

    public function store(Request $request)
    {
        $idUser = auth()->user()->id;
        $ulasan = $request->ulasan;
        $rating = $request->rating;

        $parameter = [
            'id_user' => $idUser,
            'ulasan' => $ulasan,
            'rating' => $rating,
        ];
        // try {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/testimoni";
        $response = $client->request('POST', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ],
            'body' => json_encode($parameter),
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $testimoni = $contentArray["data"];
        Session::flash('message', 'Berhasil Menambah Data Testimoni Client');
        return redirect()->route('formTestimoni', ['testimoni' => $testimoni]);
        // } catch (\Exception $e) {
        // return redirect()->route('home');
        // }
    }

    public function show(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/testimoni/$id";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $testimoni = $contentArray["data"];

            return view('testimoni', ['testimoni' => $testimoni]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('testimoni', ['testimoni' => []]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/testimoni/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $testimoni = $contentArray["data"];
            Session::flash('message', 'Berhasil Menghapus Data Testimoni');
            return redirect()->route('testimoniIndex', ['testimoni' => $testimoni]);
        } catch (\Exception $e) {
            return redirect()->route('testimoniIndex');
        }
    }
}
