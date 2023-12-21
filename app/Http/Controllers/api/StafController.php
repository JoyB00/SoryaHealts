<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staf;
use Illuminate\Support\Facades\Validator;

class StafController extends Controller
{
    public function index()
    {
        try {
            $staf = Staf::all();

            return response()->json([
                'data' => $staf,
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
            $dataInput = $request->all();
            $validate = Validator::make($dataInput, [
                'email_staf' => 'required|email:rfc,dns|unique:stafs',
            ]);
            if ($validate->fails()) {
                return response(['message' => $validate->errors()->first()], 400);
            }
            $staf = Staf::create($request->all());
            return response()->json([
                'data' => $staf,
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
            $staf = Staf::find($id);

            if (!$staf) {
                throw new \Exception('Staf tidak ditemukan');
            }
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ambil data',
                'data' => $staf
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
            $staf = Staf::find($id);
            $dataInput = $request->all();
            $validate = Validator::make($dataInput, [
                'email_staf' => 'required|email:rfc,dns|unique:stafs',
            ]);

            if ($validate->fails()) {
                return response(['message' => $validate->errors()->first()], 400);
            }

            $staf->update($dataInput);

            return response()->json([
                'status' => true,
                'message' => 'Berhasil update data',
                'data' => $staf
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
            $staf = Staf::find($id);
            if (!$staf) {
                throw new \Exception('Staf tidak ditemukan');
            }

            $staf->delete();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil delete data',
                'data' => $staf
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
