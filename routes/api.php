<?php

use App\Http\Controllers\Secret\DashboardController;
use App\Http\Controllers\Secret\AutentikasiController;
use App\Http\Controllers\Secret\EmployeeController;
use App\Http\Controllers\Secret\KategoriController;
use App\Http\Controllers\Secret\MasteradminController;
use App\Http\Controllers\Secret\ProductController;
use App\Http\Controllers\Secret\UnitController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('autentikasi')->group(function () {
    Route::post("masuk", [AutentikasiController::class, 'cekLogin']);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get("/home", [DashboardController::class, 'dashboardData']);
        // Route::get("/profil", [DashboardController::class, 'profile']);
    });

    Route::prefix('master-admin')->group(function () {
        Route::get("/list", [MasteradminController::class, 'listAdmin']);
        Route::post("/add", [MasteradminController::class, 'addAdmin']);
        Route::put("/update/{id}", [MasteradminController::class, 'updateData']);
        Route::delete("/hapus/{id}", [MasteradminController::class, 'hapus']);
    });

    Route::prefix('master-employee')->group(function () {
        Route::post("/list", [EmployeeController::class, 'listPegawai']);
        Route::post("/tambah", [EmployeeController::class, 'addPegawai']);
        Route::get("/verifikasi/{id}", [EmployeeController::class, 'verify']);
        Route::put("/update/{id}", [EmployeeController::class, 'updatePegawai']);
        Route::delete("/hapus/{id}", [EmployeeController::class, 'hapus']);
    });

    Route::prefix('master-satuan')->group(function () {
        Route::get("/list", [UnitController::class, 'listSatuan']);
        Route::post("/tambah", [UnitController::class, 'tambahSatuan']);
        Route::put("/update/{id}", [UnitController::class, 'update']);
        Route::delete("/hapus/{id}", [UnitController::class, 'hapus']);
    });

    Route::prefix('master-kategori-produk')->group(function () {
        Route::get("/list", [KategoriController::class, 'listKategori']);
        Route::post("/tambah-data", [KategoriController::class, 'tambahKategori']);
        Route::put("/update-data/{id}", [KategoriController::class, 'updateData']);
        Route::delete("/hapus-data/{id}", [KategoriController::class, 'hapus']);
    });

    Route::prefix('master-produk')->group(function () {
        Route::post("/list", [ProductController::class, 'listProduct']);
        Route::post("/tambah-produk", [ProductController::class, 'tambahProduct']);
        Route::post("/update-produk", [ProductController::class, 'update']);
        Route::delete("/hapus-produk/{id}", [ProductController::class, 'hapusProduct']);
        Route::get("/list-support/kategori", [ProductController::class, 'listCategory']);
        Route::get("/list-support/satuan", [ProductController::class, 'listSatuan']);
    });
});

// Testing Email
Route::prefix('test')->group(function () {
    // Route::get("/profil", [DashboardController::class, 'profile']);
    Route::get("/test-email", [MasteradminController::class, 'testEmail']);
});
