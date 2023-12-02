<?php

namespace App\Http\Controllers\Secret;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.pegawai.index');
    }

    public function listPegawai(Request $request)
    {
        $columns = [
            0 => 'id',
            1 => 'name',
            2 => 'email',
            3 => 'role_id',
        ];

        $start = $request->start;
        $limit = $request->length;
        $orderColumn = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search')['value'];

        // Hitung data keseluruhan
        $hitung = User::where('role_id','!=',1)->where('role_id','!=',4)->where('deleted_at',null)->count();

        $pegawai = User::where('role_id','!=',1)->where('role_id','!=',4)->where('deleted_at',null)->where(function ($q) use ($search) {
            return $q->where('name','LIKE','%'.$search.'%');
        })->orderby($orderColumn,$dir)->skip($start)->take($limit)->get();
        $data = array();
        foreach($pegawai as $p)
        {
            $roles = '';
            if($p->role_id == 2)
            {
                $roles = 'Customer Service';
            }else{
                $roles = 'Dept. Collection';
            }

            $item['id'] = $p->id;
            $item['name'] = $p->name;
            $item['email'] = $p->email;
            $item['role_id'] = $p->role_id;
            $item['roles'] = $roles;
            $item['is_verifikasi'] = $p->email_verified_at == null ? false : true;
            $data[] = $item;
        }

        return response()->json([
            'draw' => $request->draw,
            'recordsTotal' => $hitung,
            'recordsFiltered' => $hitung,
            'data' => $data,
        ],200);
    }

    public function addPegawai(Request $request)
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

        $pegawai = new User();
        $pegawai->name = $request->name;
        $pegawai->email = $request->email;
        $pegawai->password = Hash::make($request->password);
        $pegawai->role_id = $request->role_id;
        $pegawai->save();

        // Email kredensial ke akun mereka
        $nama = $request->name;
        $email = $request->email;
        $password = $request->password;
        $role = 'Administrator';

        $user = [
            'email' => $email,
            'name' => $nama,
        ];
        Mail::send('fmail.employee', ['nama' => $nama, 'email' => $email, 'password' => $password, 'role' => $role], function ($m) use ($user) {
            $m->from('dodo@mrvisca.tech', 'Mr Visca');
            $m->to($user['email'], $user['name'])->subject('Email pendaftaran akun!');
        });

        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan data pegawai koperasi',
        ],201);
    }

    public function verify($id)
    {
        $find = User::where('id',$id)->where('role_id','!=',1)->where('role_id','!=',4)->where('deleted_at',null)->first();
        if($find)
        {
            $find->email_verified_at = date('Y-m-d H:i:s');
            $find->save();

            return response()->json([
                'success' => true,
                'message' => 'Berhasil melakukan verifikasi email',
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal melakukan verifikasi email, data tidak ditemukan',
            ],400);
        }
    }

    public function updatePegawai(Request $request,$id)
    {
        $find = User::where('id',$id)->where('role_id','!=',1)->where('role_id','!=',4)->where('deleted_at',null)->first();
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
                'message' => 'Berhasil mengupdate data pegawai koperasi',
            ],201);
        }
    }

    public function hapus($id)
    {
        $find = User::where('id',$id)->where('role_id','!=',1)->where('role_id','!=',4)->first();
        if($find)
        {
            $find->deleted_at = date('Y-m-d H:i:s');
            $find->deleted_by = Auth::user()->id;
            $find->save();

            return response()->json([
                'succes' => true,
                'message' => 'Berhasil menghapus akun administrator',
            ],201);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus data, data tidak ditemukan pada sistem kami',
            ],400);
        }
    }
}
