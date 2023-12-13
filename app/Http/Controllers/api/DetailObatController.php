<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DetailObatController extends Controller
{
    public function index(){
        $client = new Client();
        $url = "http://localhost:8000/api/detailobat";
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
    }
}
