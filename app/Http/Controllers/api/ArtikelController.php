<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        try {
            $artikel = Artikel::all();

            return response()->json([
                'data' => $artikel,
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
            $artikel = Artikel::create($request->all());

            return response()->json([
                'data' => $artikel,
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
            $artikel = Artikel::find($id);

            if (!$artikel) {
                throw new \Exception('Supplier tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $artikel
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
            $artikel = Artikel::find($id);
            if (!$artikel) {
                throw new \Exception('Supplier tidak ditemukan');
            }

            $artikel->update($request->all());

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $artikel
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
            $artikel = Artikel::find($id);
            if (!$artikel) {
                throw new \Exception('Supplier tidak ditemukan');
            }

            $artikel->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $artikel
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
