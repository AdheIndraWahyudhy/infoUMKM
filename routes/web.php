<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\productController;
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
    Route::get('/store/{id}',[halamanController::class,'detailStore']);
    Route::get('/umkm',[halamanController::class,'umkm']);
    Route::get('/category/{id}',[halamanController::class,'category']);
    Route::get('/favorite',[halamanController::class,'favoriteStore']);
    Route::get('/store/{id}/rating',[halamanController::class,'ratingSuggestion']);
    Route::post('/store/{id}/send',[halamanController::class,'sendRatingSuggestion']);
    Route::post('/store/{id}/report',[halamanController::class,'reportAccount']);
    Route::get('/aboutus',[halamanController::class,'aboutus']);
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
    Route::get('/profile',[adminController::class,'profil']);
    Route::post('/profile/update',[adminController::class,'profilUpdate']);
    Route::get('/users',[adminController::class,'usersList']);
    Route::get('/user/{id}',[adminController::class,'detailUser']);
    Route::get('/report/{id}',[adminController::class,'detailLaporan']);
    Route::get('/report/stop/{id}',[adminController::class,'stopTheStore']);
    Route::get('/report/restore/{id}',[adminController::class,'restoreTheStore']);
    Route::get('/store/delete/{id}',[adminController::class,'deleteStore']);
    Route::get('/account/delete/{id}',[adminController::class,'deleteAccount']);

});
// Route::get('coba',[cobaController::class,'index']);

// Route Halmana user/owner
Route::middleware('isUser')->group(function(){
    Route::prefix('user')->group(function(){
        Route::get('/',[userController::class,'umkm']);
        Route::get('/account',[userController::class,'account']);
        Route::post('/account/update',[userController::class,'updateUser']);
        Route::get('/product',[productController::class,'index']);
        Route::get('/umkm/store/{id}',[userController::class,'detailStore']);
        Route::prefix('store')->group(function(){
            Route::get('/',[userController::class,'makeStore']);
            Route::post('/create',[userController::class,'createStore']);
            Route::post('/update/',[userController::class,'updateStore']);
        });
    });
    Route::prefix('product')->group(function(){
        Route::post('/create',[productController::class,'createProduct']);
        Route::get('/edit/{id}',[productController::class,'editProduct']);
        Route::post('/update/{id}',[productController::class,'updateProduct']);
        Route::get('/delete/{id}',[productController::class,'deleteProduct']);
    });
});