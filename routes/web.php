<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\P4Suci;
use App\Http\Controllers\P5Suci;
use App\Http\Controllers\P5Zahra;
use App\Http\Controllers\P5Rivaldo;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\ProgresController;

// ✅ Route ke halaman list barang
Route::get('/list-barang', [ListBarangController::class, 'tampilkan']);

// ✅ Route ke halaman home
Route::get('/', function () {
    return view('pages.home');
});

// ✅ Tetap bisa akses halaman welcome kalau dibutuhkan
Route::get('/welcome', function () {
    return view('welcome');
});

// ✅ Route tambahan lainnya (biarkan tetap seperti ini)
Route::get('/products', [ProductController::class, 'showList']);

Route::get('/user/{id}', function ($id){
    return 'User Dengan ID ' .$id;
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', function($id, $nama){
    return view('list_barang', compact('id', 'nama'));
});

Route::get('/list_barang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/items', [ItemController::class, 'index']);

// 🟨 DIHAPUS: Route duplikat /list-barang dari P4Suci
// Route::get('/list-barang', [P4Suci::class, 'tampilkan']);

Route::get('/resepmakan', function () {
    return view('resepmakan');
});

Route::get('/P5Suci', [P5Suci::class, 'tampilkan']);

Route::get('/P5Zahra', [P5Zahra::class, 'tampilkan']);

Route::get('/P5Rivaldo', [P5Rivaldo::class, 'tampilkan']);

Route::get('/program_latihan', [LatihanController::class, 'latihan']);

Route::get('/program_latihan2', [LatihanController::class, 'latihan2']);

Route::get('/fitur', [FiturController::class, 'index']);

Route::get('/notifikasi', [NotifikasiController::class, 'tampilkan']);

Route::get('/progres', [ProgresController::class, 'progres']);
