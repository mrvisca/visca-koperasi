<?php

namespace App\Http\Controllers\Secret;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function loginView()
    {
        return view('login');
    }
}
