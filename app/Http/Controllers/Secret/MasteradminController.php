<?php

namespace App\Http\Controllers\Secret;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
