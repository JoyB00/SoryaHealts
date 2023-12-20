<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Obat;
use App\Models\Testimoni;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileClient extends Controller
{
    public function index()
    {
        try {
            $user = new User();
            $url = "http://127.0.0.1:8000/api/obat";
            $response = $user->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $obat = $contentArray["data"];

            return view('profile', ['obat' => $obat]);
        } catch (\Exception $e) {
            return view('profile', ['obat' => []]);
        }
    }
}
