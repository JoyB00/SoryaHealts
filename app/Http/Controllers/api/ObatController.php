<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function index()
    {
        try {
            $obat = Obat::all();

            return response()->json([
                'data' => $obat,
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
            $obat = Obat::create($request->all());

            return response()->json([
                'data' => $obat,
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
            $obat = Obat::find($id);

            if (!$obat) {
                throw new \Exception('Obat tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $obat
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
            $obat = Obat::find($id);
            if (!$obat) {
                throw new \Exception('Obat tidak ditemukan');
            }

            $obat->update($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $obat
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
            $obat = Obat::find($id);
            if (!$obat) {
                throw new \Exception('Obat tidak ditemukan');
            }

            $obat->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $obat
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
