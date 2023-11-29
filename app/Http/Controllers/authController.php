<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //
    function index(){
        return view('Test.login');
    }

    function login(Request $request){
        $dataLogin=[
            'name' => $request->username,
            'password' => $request->password,
        ];
    
        if(Auth::attempt($dataLogin)){
            dd(Auth::user()); // Periksa informasi pengguna
            return redirect('coba');
        }
    
        return "gagal";
    }

    function logout(){
        Auth::logout();
        return redirect('auth');
    }
}
