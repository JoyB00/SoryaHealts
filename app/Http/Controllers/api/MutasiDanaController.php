<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mutasi_Dana;

class MutasiDanaController extends Controller
{
    public function indexPenjualan()
    {
        try {
            $mutasiDana = Mutasi_Dana::with('transaksi.user', 'transaksi.alamat')->whereNot('id_transaksi', null)->get();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $mutasiDana
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }
    public function indexPembelian()
    {
        try {
            $mutasiDana = Mutasi_Dana::with('pengadaan', 'pengadaan.supplier')->whereNot('id_pengadaan', null)->get();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $mutasiDana
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
            $mutasiDana = Mutasi_Dana::create($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil insert data',
                'data' => $mutasiDana
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
            $mutasiDana = Mutasi_Dana::find($id);

            if (!$mutasiDana) {
                throw new \Exception('Mutasi dana tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $mutasiDana
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
            $mutasiDana = Mutasi_Dana::find($id);
            if (!$mutasiDana) {
                throw new \Exception('Mutasi dana tidak ditemukan');
            }

            $mutasiDana->update($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $mutasiDana
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
            $mutasiDana = Mutasi_Dana::find($id);
            if (!$mutasiDana) {
                throw new \Exception('Mutasi dana tidak ditemukan');
            }

            $mutasiDana->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $mutasiDana
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
