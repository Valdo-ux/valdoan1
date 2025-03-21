<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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
