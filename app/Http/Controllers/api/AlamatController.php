<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = "http://localhost:8000/api/alamat";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        print_r($data);
    }
}
