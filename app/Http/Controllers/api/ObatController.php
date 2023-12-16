<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{

    public function index()
    {
        try {
            $alamat = Obat::all();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $alamat
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
            $alamat = Obat::create($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil insert data',
                'data' => $alamat
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
            $alamat = Obat::find($id);

            if (!$alamat) {
                throw new \Exception('Alamat tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $alamat
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
            $alamat = Obat::find($id);
            if (!$alamat) {
                throw new \Exception('Alamat tidak ditemukan');
            }

            $alamat->update($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $alamat
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
            $alamat = Obat::find($id);
            if (!$alamat) {
                throw new \Exception('Berita tidak ditemukan');
            }

            $alamat->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $alamat
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
