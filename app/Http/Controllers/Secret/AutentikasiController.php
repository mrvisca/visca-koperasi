<?php

namespace App\Http\Controllers\Secret;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AutentikasiController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'email'   => 'required',
            'password' => 'required',
        ]);

        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $user = User::where('email', $request->email)->where('deleted_at',null)->first();

        if ($user == null) {
            return response([
                'message' => 'Akun anda belum terdaftar di sistem kami'
            ], 401);
        }

        if($user->email_verified_at == null)
        {
            return response()->json([
                'message' => 'Gagal login, akun belum diverifikasi',
                'email_verified_at' => $user->email_verified_at,
            ],401);
        }

        $checkPass = User::where("password", "!=", Hash::check($request->password, $user->password))->where('deleted_at',null)->first();

        if ($checkPass == null) {
            return response([
                'message' => 'Password anda Salah'
            ], 401);
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => 'Gabungan antara email dan password salah'
            ], 401);
        }

        $tokenResult = $user->createToken('Access Token');
        $token = $tokenResult->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'Login koperasi app berhasil, selamat datang '.$user->name,
            'token' => $token,
        ],201);
    }
}
