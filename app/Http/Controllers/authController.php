<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    //
    function index(){
        return view('auth.login');
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
            // jika autentifikasi sukses
            if (Auth::user()->role === 'admin') {
                // Jika role adalah admin, redirect ke halaman admin
                return redirect('admin')->with('success', 'Selamat datang ' . Auth::user()->name . '. Anda berhasil login sebagai admin.');
            } elseif (Auth::user()->role === 'user') {
                // Jika role adalah user, redirect ke halaman user
                return redirect('user')->with('success', 'Selamat datang ' . Auth::user()->name . '. Anda berhasil login sebagai user.');
            }
        }else{
            // kalau autentifikasi gagal
            return redirect('auth')->withErrors('Username atau password salah');
            // return "gagal";
            
        }
    }
    function logout(){
        Auth::logout();
        return redirect('auth')->with('success',' Berhasil Logout');
    }
    function register(){
        return view('auth.register');
    }
    function create(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        Session::flash('number_phone', $request->phone_number);
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
            'number_phone.required' =>'Masukkan Nomor HP/WhatsApp',
            'password.min' =>'Masukkan password minimum 5 karakter',
            'password.required' =>'Password Wajib di isi',
        ]);
        $data=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'number_phone'=>$request->input('number_phone')
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
