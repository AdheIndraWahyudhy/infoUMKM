<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\userController;
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

// Halaman yang di akses oleh pengunjung
Route::get('/',[halamanController::class,'dashboard']);
Route::get('/category/{id}',[halamanController::class,'category']);

// Route autentifikasi
Route::get('/auth',[authController::class,'index']);
Route::post('/auth/login',[authController::class,'login']);
Route::get('/auth/register',[authController::class,'register']);
Route::post('/auth/register/create',[authController::class,'create']);
// Route Logout
Route::get('/auth/logout',[authController::class,'logout']);

// Route halaman Admin
Route::get('/admin',[adminController::class,'index']);

// Route Halmana user/owner
Route::get('/user',[userController::class,'index']);