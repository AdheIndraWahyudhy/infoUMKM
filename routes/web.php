<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
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
    return "Hello World";
});
Route::get('/auth',[authController::class,'index']);
Route::post('/auth/login',[authController::class,'login']);
Route::get('/auth/register',[authController::class,'register']);
Route::post('/auth/register/create',[authController::class,'create']);

Route::get('/admin',[adminController::class,'index']);


Route::get('/user',[adminController::class,'user']);