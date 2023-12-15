<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use \Illuminate\Support\Facades\Session;
use App\Models\User;

class UserClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register(Request $request)
    {

        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;
        $no_telp = $request->no_telp;

        $parameter = [
            'nama' => $nama,
            'email' => $email,
            'password' => $password,
            'no_telp' => $no_telp,
        ];
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/register";
            $response = $client->request('POST', $url, [
                'headers' => ['Content-type' => 'application/json'],
                'body' => json_encode($parameter)
            ]);

            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $data = $contentArray['user'];

            $details = [
                'username' => $request->username,
                'website' => 'Atma Library',
                'datetime' => date('Y-m-d H:i:s'),
                'url' => request()->getHttpHost() . '/register/verify/' . $data['verify_key'],
            ];

            Mail::to($request->email)->send(new MailSend($details));

            Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');

            return redirect()->route('login', ['user' => $contentArray['user'],]);
        } catch (\Exception $e) {
            Session::flash('error',  $e->getMessage());
            return redirect()->route('register');
        }
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')->where('verify_key', $verify_key)->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'active' => 1,
                    'email_verified_at' => date('Y-m-d H:i:s'),
                ]);
            return "Verifikasi berhasil. Akun anda sudah aktif.";
        } else {
            return "Keys tidak valid.";
        }
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $parameter = [
            'email' => $email,
            'password' => $password,
        ];
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/login";
            $response = $client->request('POST', $url, [
                'headers' => ['Content-type' => 'application/json'],
                'body' => json_encode($parameter)
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $data = $contentArray['user'];

            if ($data['role'] == 'admin') {
                return redirect()->route('admin', ['user' => $contentArray['user'],]);
            } else {

                return redirect()->route('home', ['user' => $contentArray['user'],]);
            }
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if ($errorCode ==  401) {
                Session::flash('error',  'Invalid Email & Password Match');
            } else {
                Session::flash('error',  'Akun anda belum diverifikasi, Silahkan cek email Anda');
                // Session::flash('error',  $e->getMessage());
            }
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
