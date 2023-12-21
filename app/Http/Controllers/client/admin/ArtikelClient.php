<?php

namespace App\Http\Controllers\client\admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use \Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

session_start();

class ArtikelClient extends Controller
{
    public function index()
    {
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/artikel";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $artikel = $contentArray["data"];

            return view('Admin.artikel', ['artikel' => $artikel]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('Admin.artikel', ['artikel' => []]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul = $request->judul;
        $topik = $request->topik;
        $author = $request->author;
        $tanggal_publish = $request->tanggal_publish;
        $deskripsi = $request->deskripsi;


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath =  $image->move(public_path('public/images/artikel'), $image->getClientOriginalName());
            $imageUrl = $image->getClientOriginalName();
        }

        $parameter = [
            'judul' => $judul,
            'topik' => $topik,
            'author' => $author,
            'tanggal_publish' => $tanggal_publish,
            'deskripsi' => $deskripsi,
            'gambar_artikel' => $imageUrl,
        ];
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/artikel";
            $response = $client->request('POST', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $artikel = $contentArray["data"];
            toastr()->success('Berhasil Menambahkan Data Artikel');
            return redirect()->route('artikelIndex', ['artikel' => $artikel]);
        } catch (\Exception $e) {
            return redirect()->route('artikelIndex');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->id_artikel;
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/artikel/$id";
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ]
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);

            $artikel = $contentArray["data"];
            $artikelAll =  Artikel::inRandomOrder()->get();

            return view('detailArtikel', ['artikel' => $artikel, 'artikelAll' => $artikelAll]);
        } catch (\Exception $e) {
            print_r($_SESSION['access_token']);
            return view('detailArtikel', ['artikel' => []]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $artikel = Artikel::where('id', $id)->first();
        $judul = $request->judul;
        $topik = $request->topik;
        $author = $request->author;
        $tanggal_publish = $request->tanggal_publish;
        $deskripsi = $request->deskripsi;


        if ($request->hasFile('image')) {
            File::delete(public_path('public/images/artikel/' . $artikel->gambar_artikel));
            $image = $request->file('image');
            $imagePath =  $image->move(public_path('public/images/artikel'), $image->getClientOriginalName());
            $imageUrl = $image->getClientOriginalName();
        } else {
            $imageUrl = $artikel['gambar_artikel'];
        }

        $parameter = [
            'judul' => $judul,
            'topik' => $topik,
            'author' => $author,
            'tanggal_publish' => $tanggal_publish,
            'deskripsi' => $deskripsi,
            'gambar_artikel' => $imageUrl,
        ];

        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/artikel/$id";
            $response = $client->request('PUT', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
                'body' => json_encode($parameter),
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $artikel = $contentArray["data"];
            toastr()->success('Berhasil Memperbarui Data Artikel');

            return redirect()->route('artikelIndex', ['artikel' => $artikel]);
        } catch (\Exception $e) {
            return redirect()->route('artikelIndex');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artikel = Artikel::where('id', $id)->first();
        File::delete(public_path('public/images/artikel/' . $artikel->gambar_artikel));
        try {
            $client = new Client();
            $url = "http://127.0.0.1:8000/api/artikel/$id";
            $response = $client->request('Delete', $url, [
                'headers' => [
                    'Content-type' => 'application/json',
                    'Authorization' => 'Bearer ' . $_SESSION['access_token']
                ],
            ]);
            $content = $response->getBody()->getContents();
            $contentArray = json_decode($content, true);
            $artikel = $contentArray["data"];
            toastr()->success('Berhasil Menghapus Data Artikel');
            return redirect()->route('artikelIndex', ['artikel' => $artikel]);
        } catch (\Exception $e) {
            return redirect()->route('artikelIndex');
        }
    }
}
