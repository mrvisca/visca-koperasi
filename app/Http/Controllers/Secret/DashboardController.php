<?php

namespace App\Http\Controllers\Secret;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function generalDashboard()
    {
        return view('admin.dashboard.index');
    }
}
