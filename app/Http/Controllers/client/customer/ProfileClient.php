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
        $nama = $request->nama;
        $no_telp = $request->no_telp;
        $email = $request->email;
        $gender = $request->gender;
        $tglLahir = $request->tglLahir;

        $id = auth()->user()->id;

        if ($request->hasFile('profile')) {
            $profil = $request->file('profile');
            $profil_ekstensi = $profil->extension();
            $profile_nama = date('ymdhis') . "." . $profil_ekstensi;
            $profil->move(public_path('public/images'), $profile_nama);
        } else {
            $profile_nama = auth()->user()->profile;
        }

        $parameter = [
            'nama' => $nama,
            'email' => $email,
            'jenis_kelamin' => $gender,
            'no_telp' => $no_telp,
            'tanggal_lahir' => $tglLahir,
            'profile' => $profile_nama,
        ];


        try {
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
            toastr()->success('Berhasil Edit Profil');

            return redirect()->route('updateProfile', ['user' => $user]);
        } catch (\Exception $e) {
            return redirect()->route('updateProfile', ['user' => $user]);
        }
    }
}
