<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detail_Pengadaan;
use Illuminate\Http\Request;

class DetailPengadaanController extends Controller
{
    public function index()
    {
        try {
            $detailPengadaan = Detail_Pengadaan::all();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $detailPengadaan
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
            $detailPengadaan = Detail_Pengadaan::create($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil insert data',
                'data' => $detailPengadaan
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
            $detailPengadaan = Detail_Pengadaan::find($id);

            if (!$detailPengadaan) {
                throw new \Exception('Detail pengadaan tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $detailPengadaan
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $detailPengadaan = Detail_Pengadaan::find($id);
            if (!$detailPengadaan) {
                throw new \Exception('Detail pengadaan tidak ditemukan');
            }

            $detailPengadaan->update($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $detailPengadaan
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
            $detailPengadaan = Detail_Pengadaan::find($id);
            if (!$detailPengadaan) {
                throw new \Exception('Detail pengadaan tidak ditemukan');
            }

            $detailPengadaan->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $detailPengadaan
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
