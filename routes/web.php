<?php

use App\Http\Controllers\Secret\AutentikasiController;
use App\Http\Controllers\Secret\DashboardController;
use App\Http\Controllers\Secret\EmployeeController;
use App\Http\Controllers\Secret\MasteradminController;
use App\Http\Controllers\Secret\UnitController;
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
Route::get('/aplikasi/general-dashboard',[DashboardController::class, 'generalDashboard'])->name('dashboard');
Route::get('/aplikasi/master-admin',[MasteradminController::class, 'index'])->name('masteradmin');
Route::get('/aplikasi/master-employee',[EmployeeController::class, 'index'])->name('masteremployee');
Route::get('/aplikasi/master-satuan',[UnitController::class, 'index'])->name('unitsatuan');
