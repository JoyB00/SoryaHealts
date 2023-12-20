<?php

namespace App\Http\Controllers\api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Str;
use \Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function index()
    {
        try {
            $user = User::where('role', 'customer')->get();

            return response()->json([
                'data' => $user,
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

    public function register(Request $request)
    {
        $registrationData = $request->all();
        $str = Str::random(100);

        $validate = Validator::make($registrationData, [
            'nama' => 'required|max:60',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:8',
            'no_telp' => 'required|min:11',
        ]);

        if ($validate->fails()) {
            return response(['message' => $validate->errors()->first()], 400);
        }

        $registrationData['password'] = bcrypt($request->password);
        $registrationData['verify_key'] = $str;
        $registrationData['role'] = 'customer';

        $user = User::create($registrationData);

        return response([
            'message' => 'Register Success',
            'user' => $user,
        ], 200);
    }



    public function login(Request $request)
    {
        $loginData = $request->all();

        $validate = Validator::make($loginData, [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
        ]);
        if ($validate->fails()) {
            return response(['message' => $validate->errors()->first()], 400);
        }

        if (!Auth::attempt($loginData)) {
            return response(['message' => 'Invalid email & password match'], 401);
        }

        /** @var \App\Models\User $user **/
        $user = Auth::user();

        if ($user->active != 1) {
            return response(['message' => 'Akun anda belum diverifikasi, Silahkan cek email Anda'], 401);
        }

        $token = $user->createToken('Authentication Token')->accessToken;

        return response([
            'message' => 'Authenticated',
            'user' => $user,
            'token_type' => 'Bearer',
            'access_token' => $token
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response([
            'message' => 'Logged out'
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $validationRules = [
                'nama' => 'max:60',
                'email' => 'email:rfc,dns|unique:users,email,' . $id,
                'password' => 'min:8',
                'no_telp' => 'min:11',
            ];

            $validate = Validator::make($request->all(), $validationRules);

            if ($validate->fails()) {
                return response(['message' => $validate->errors()->first()], 400);
            }

            $user = User::find($id);

            if (!$user) {
                return response(['message' => 'User not found'], 404);
            }
            $user->update($request->all());

            return response([
                'message' => 'User data updated successfully',
                'user' => $user,
            ], 200);
        } catch (\Exception $e) {
            return response([
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ], 400);
        }
    }
}
