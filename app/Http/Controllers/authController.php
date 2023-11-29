<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    function index(){
        return view('Test.login');
    }
    function login(Request $request){
        Session::flash('name', $request->username);
        $request->validate([
            // proses pengecekan/validasi
            // required artinya di perlukan
            'username' =>'required',
            'password' =>'required',

        ],[
            'username.required' =>'User Name Wajib di isi',
            'password.required' =>'Password Wajib di isi',
        ]);
        // proses autentifikasi
        $infologin=[
            // mengambil data
            'name'=>$request->username,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            // // jika autentifikasi sukses
            // if (Auth::user()->role === 'admin') {
            //     // Jika role adalah admin, redirect ke halaman admin
            //     return redirect('admin')->with('success', 'Selamat datang ' . Auth::user()->name . '. Anda berhasil login sebagai admin.');
            //     // return view('Test.admin')->with('nama',Auth::user()->name);
            // } elseif (Auth::user()->role === 'user') {
            //     // Jika role adalah user, redirect ke halaman user
            //     return redirect('user')->with('success', 'Selamat datang ' . Auth::user()->name . '. Anda berhasil login sebagai user.');
            // }
            return redirect('/coba');
        }else{
            // kalau autentifikasi gagal
            // return redirect('auth')->withErrors('Username atau password salah');
            return "gagal";
            
        }
    }
    function logout(){
        Auth::logout();
        return redirect('auth')->with('success',' Berhasil Logout');
    }
    function register(){
        return view('Test.register');
    }
    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('number_phone', $request->number_phone);
        $request->validate([
            // proses pengecekan/validasi
            // required artinya di perlukan
            'name' =>'required|unique:users',
            'email' =>'required|email',
            'password' =>'required|min:5',
            'number_phone' =>'required'

        ],[
            'name.required' =>'Nama Wajib di isi',
            'email.required' =>'Email Wajib di isi',
            'email.email' =>'Masukkan email dengan benar',
            'name.unique' =>'Username Sudah terdaftar',
            'number_phone.required' =>'Masukkan Nomor WA',
            'password.min' =>'Masukkan password minimum 5 karakter',
            'password.required' =>'Password Wajib di isi',
        ]);
        $data=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'number_phone'=>$request->input('number_phone'),
            'role'=>'user',
        ];
        User::create($data);
        $infologin=[
            // mengambil data
            'name'=>$request->name,
            'password'=>$request->password
        ];
        if(Auth::attempt($infologin)){
            // jika autentifikasi sukses
            return redirect('user')->with('success',Auth::user()->name.' Berhasil Login');
            
            // return "success";
        }else{
            // kalau autentifikasi gagal
            return redirect('auth')->withErrors('Username atau password salah');
            // return "gagal";
            
        }

    }
}
