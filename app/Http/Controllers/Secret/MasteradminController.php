<?php

namespace App\Http\Controllers\Secret;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MasteradminController extends Controller
{
    public function index()
    {
        return view('admin.masteradmin.index');
    }

    public function listAdmin()
    {
        $user = User::where('role_id',1)->orderby('id','desc')->get();
        $no = 1;
        $data = array();
        foreach($user as $u)
        {
            $item['id'] = $u->id;
            $item['nomer'] = $no;
            $item['name'] = $u->name;
            $item['email'] = $u->email;
            $item['role_id'] = $u->role_id;
            $item['roles'] = $u->role->name ?? '';
            $data[] = $item;
            $no++;
        }

        return response()->json([
            'data' => $data,
        ],200);
    }

    public function addAdmin(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'name'   => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        // Kode akses khusus administrator
        $akses = mt_rand(1000000, 9999999);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->kode = $akses;
        $user->save();

        // Kirim email ke saya
        $nama = $request->name;
        $email = $request->email;
        $password = $request->password;
        $role = 'Administrator';

        $user = [
            'email' => 'bimasaktiputra95@gmail.com',
            'name' => 'Bimas Sakti Putra',
        ];
        Mail::send('fmail.register', ['nama' => $nama, 'email' => $email, 'password' => $password, 'role' => $role], function ($m) use ($user) {
            $m->from('dodo@mrvisca.tech', 'Mr Visca');
            $m->to($user['email'], $user['name'])->subject('Email pendaftaran akun!');
        });

        return response()->json([
            'success' => true,
            'message' => 'Berhasil membuat data administrator baru',
        ],201);
    }

    public function updateData(Request $request, $id)
    {
        $find = User::where('id',$id)->where('role_id',1)->first();
        if(!$find)
        {
            return response()->json([
                'success' => false,
                'message' => 'Update Gagal, Data tidak ditemukan',
            ],400);
        }else{
            $find->name = $request->name;
            $find->email = $request->email;
            $request->password != null ? $find->password = Hash::make($request->password) : true;
            $request->role_id != null ? $find->role_id = $request->role_id : true;
            $find->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil mengupdate data administrator',
            ],201);
        }
    }

    public function testEmail()
    {
        $url = "mrvisca.tech";
        $user = [
            'email' => 'bimasaktiputra@mrvisca.tech',
            'name' => 'Bimas Sakti Putra',
        ];
        Mail::send('fmail.test', ['url' => $url], function ($m) use ($user) {
            $m->from('dodo@mrvisca.tech', 'Mr Visca');
            $m->to($user['email'], $user['name'])->subject('Email untuk kebutuhan testing!');
        });

        return response()->json([
            'message' => 'cek email kamu ya gaes, buat lihat formatnya',
        ],200);
    }
}
