<?php

use App\Http\Controllers\P4Suci;
use App\Http\Controllers\P5Suci;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route ::get('/user/{id}', function ($id){
    return 'User Dengan ID ' .$id;
});

Route::prefix('admin')->group(function (){
    Route::get('dashboard', function (){
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

use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index']);

Route::get('/items', [ItemController::class, 'index']);

Route::get('/list-barang', [P4Suci::class, 'tampilkan']);

// routes/web.php
Route::get('/resepmakan', function () {
    return view('resepmakan');
});

Route::get('/P5Suci', [P5Suci::class, 'tampilkan']);

Route::get('/program_latihan', [LatihanController::class, 'latihan']);

Route::get('/program_latihan2', [LatihanController::class, 'latihan2']);