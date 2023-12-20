<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use App\Models\Supplier;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSend;
use App\Models\Mutasi_Dana;
use App\Models\Staf;
use \Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

session_start();

class UserClient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/user";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $pelanggan = $contentArray["data"];

            return view('Admin.customers', ['pelanggan' => $pelanggan]);
        } catch (\Exception $e) {
            return view('Admin.customers', ['pelanggan' => []]);
        }
    }

    public function gotoRegister()
    {
        return view('register');
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
                'username' => $request->nama,
                'website' => 'SorYa Healts',
                'datetime' => date('Y-m-d H:i:s'),
                'url' => request()->getHttpHost() . '/register/verify/' . $data['verify_key'],
            ];

            Mail::to($request->email)->send(new MailSend($details));

            Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silahkan cek email anda untuk mengaktifkan akun.');

            return redirect()->route('login');
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

            Session::flash('message', 'Verifikasi berhasil. Akun anda sudah aktif.');
            return redirect()->route('login', ['user' => $user]);
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

            $userData = $contentArray['user'];
            $user = User::firstOrNew(['email' => $userData['email']]);

            $user->role = $userData['role'];
            $user->save();

            Auth::login($user);
            $_SESSION['access_token'] = $contentArray['access_token'];


            if ($userData['role'] == 'admin') {
                return redirect()->route('admin', ['user' => $contentArray['user']]);
            } else {
                return redirect()->route('home', ['user' => $contentArray['user']]);
            }
        } catch (\Exception $e) {
            $errorCode = $e->getCode();
            if ($errorCode ==  401) {
                Session::flash('error',  'Invalid Email & Password Match');
            } else {
                Session::flash('error',  'Akun anda belum diverifikasi, Silahkan cek email Anda');
            }
            return redirect()->route('login');
        }
    }

    public function checkLogin()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('login');
        }
    }

    public function logout()
    {

        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/logout";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();

            if (auth()->user()->role == 'admin') {
                Auth::logout();
                return redirect()->route('login');
            } else {
                Auth::logout();
                return redirect()->back();
            }
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }

    public function gotoDashboardAdmin()
    {
        $supplier = Supplier::all();
        $produk = Obat::all();
        $customer = User::where('role', 'customer')->get();
        $staff = Staf::all();
        $mutasiDana = Mutasi_Dana::all()->last();

        return view('Admin/dashboard', [
            'supplier' => $supplier, 'produk' => $produk,
            'customer' => $customer, 'staff' => $staff, 'mutasi_dana' => $mutasiDana
        ]);
    }

    public function gotoProfile()
    {
        return view('profile');
    }
}
