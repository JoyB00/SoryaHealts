<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Detail_Transaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        try {
            $detailTransaksi = Detail_Transaksi::all();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $detailTransaksi
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
            $detailTransaksi = Detail_Transaksi::create($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil insert data',
                'data' => $detailTransaksi
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }

    public function show($id_transaksi)
    {
        try {
            $detailTransaksi = Detail_Transaksi::where('id_transaksi', $id_transaksi)->get();

            if (!$detailTransaksi) {
                throw new \Exception('Detail transaksi tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $detailTransaksi
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
            $detailTransaksi = Detail_Transaksi::find($id);
            if (!$detailTransaksi) {
                throw new \Exception('Detail transaksi tidak ditemukan');
            }

            $detailTransaksi->update($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $detailTransaksi
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
            $detailTransaksi = Detail_Transaksi::find($id);
            if (!$detailTransaksi) {
                throw new \Exception('Detail transaksi tidak ditemukan');
            }

            $detailTransaksi->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $detailTransaksi
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
