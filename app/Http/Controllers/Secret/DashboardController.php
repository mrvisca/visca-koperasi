<?php

namespace App\Http\Controllers\Secret;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function generalDashboard()
    {
        return view('admin.dashboard.index');
    }

    public function dashboardData()
    {
        $role = 'Administrator';
        if(Auth::user()->role_id == 2)
        {
            $role = 'Customer Service';
        }elseif(Auth::user()->role_id == 3){
            $role = 'Dept. Collection';
        }elseif(Auth::user()->role_id == 4){
            $role = 'Nasabah';
        }else{
            $role = 'Administrator';
        }

        $data = [
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'role_id' => Auth::user()->role_id,
            'jabatan' => $role,
            'kode' => Auth::user()->kode,
        ];

        return response()->json($data, 200);
    }
}
