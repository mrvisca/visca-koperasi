<?php

use App\Http\Controllers\Secret\AutentikasiController;
use App\Http\Controllers\Secret\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/autentikasi/login',[AutentikasiController::class, 'login'])->name('login');
Route::get('/aplikasi/general-dashboard',[DashboardController::class, 'generalDashboard'])->name('dasboard');
