<?php

namespace App\Http\Controllers\client\customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use GuzzleHttp\Client;
use \Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

session_start();
class ProfileClient extends Controller
{
    public function gotoProfile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $nama_user = $request->nama;
        $no_telp_user = $request->noHp;
        $email_user = $request->email;
        $jenis_kelamin = $request->gender;
        $tanggal_lahir = $request->tglLahir;
        $profil = $request->profil;
        $id = auth()->user()->id;

        $parameter = [
            'nama' => $nama_user,
            'email' => $email_user,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp_user,
            'tanggal_lahir' => $tanggal_lahir,
            'profil' => $profil,
        ];

        // try {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/user/$id";
        $response = $client->request('PUT', $url, [
            'headers' => [
                'Content-type' => 'application/json',
                'Authorization' => 'Bearer ' . $_SESSION['access_token']
            ],
            'body' => json_encode($parameter),
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $user = $contentArray["data"];
        Session::flash('message', 'Berhasil Memperbarui Data User');

        return redirect()->route('updateProfile', ['user' => $user]);
        // } catch (\Exception $e) {
        //     return redirect()->route('updateProfile', ['user' => $user]);
        // }
    }
}
