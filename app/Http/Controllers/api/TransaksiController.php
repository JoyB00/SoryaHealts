<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        try {
            $transaksi = Transaksi::with('user', 'alamat')->get();
            return response()->json([
                'data' => $transaksi,
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
            $transaksi = Transaksi::create($request->all());

            return response()->json([
                'data' => $transaksi,
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
            $transaksi = Transaksi::with('user', 'alamat')->where('id', $id)->first();

            if (!$transaksi) {
                throw new \Exception('data tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $transaksi
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
            $transaksi = Transaksi::find($id);
            if (!$transaksi) {
                throw new \Exception('Pengadaan tidak ditemukan');
            }

            $transaksi->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $transaksi
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
