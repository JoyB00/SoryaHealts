<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/alamat";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        print_r($data);
    }

    public function show(Request $request)
    {
        $deskripsi = $request->deskripsi;

        $parameter = [
            'deskripsi' => $deskripsi,
        ];

        $client = new Client();
        $url = "http://127.0.0.1:8000/api/alamat";
        $response = $client->request('GET', $url, [
            'headers' => ['Content-type' => 'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        print_r($data);
    }
}
