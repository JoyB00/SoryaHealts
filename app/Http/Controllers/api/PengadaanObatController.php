<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Pengadaan_Obat;
use Illuminate\Http\Request;

class PengadaanObatController extends Controller
{
    public function index()
    {
        try {
            $pengadaan_obat = Pengadaan_Obat::all();

            return response()->json([
                'data' => $pengadaan_obat,
                'status' => true,
                'message' => 'Berhasil ambil data'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }

    public function store(Request $request)
    {
        try {
            $pengadaanObat = Pengadaan_Obat::create($request->all());

            return response()->json([
                'data' => $pengadaanObat,
                'status' => true,
                'message' => 'Berhasil insert data',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }
}
