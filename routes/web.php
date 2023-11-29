<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\cobaController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman yang di akses oleh pengunjung
Route::middleware('isVisitor')->group(function () {
    Route::get('/',[halamanController::class,'dashboard']);
    Route::get('/category/{id}',[halamanController::class,'category']);
});

// Route autentifikasi
Route::prefix('/auth')->group(function(){
    Route::middleware('isVisitor')->group(function(){
        Route::get('/',[authController::class,'index']);
        Route::post('/login',[authController::class,'login']);
        Route::get('/register',[authController::class,'register']);
        Route::post('/register/create',[authController::class,'create']);    
    });

    // Route Logout
    Route::get('/logout/admin',[authController::class,'logout'])->middleware('isAdmin');
    Route::get('/logout/user',[authController::class,'logout'])->middleware('isUser');
});

// Route halaman Admin
Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/',[adminController::class,'index']);

});
// Route::get('coba',[cobaController::class,'index']);

// Route Halmana user/owner
Route::middleware('isUser')->group(function(){
    Route::prefix('user')->group(function(){
        Route::get('/',[userController::class,'index']);
    });
    Route::prefix('store')->group(function(){
        Route::get('/',[userController::class,'makeStore']);
        Route::post('/create',[userController::class,'createStore']);
    });
});