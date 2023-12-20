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
            $pengadaan_obat = Pengadaan_Obat::with('supplier')->get();
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
    public function show($id)
    {
        try {
            $pengadaan = Pengadaan_Obat::with('supplier')->where('id', $id)->first();

            if (!$pengadaan) {
                throw new \Exception('data tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $pengadaan
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }
    public function destroy($id)
    {
        try {
            $pengadaan = Pengadaan_Obat::find($id);
            if (!$pengadaan) {
                throw new \Exception('Pengadaan tidak ditemukan');
            }
            
            $pengadaan->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $pengadaan
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
