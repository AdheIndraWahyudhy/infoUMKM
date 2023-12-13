<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    function index(){
        $no=1;
        $users = User::where('role','user')->get();
        $stores =Store::get();
        $admin= Auth::user()->name;
        $idUser=Auth::user()->id;
        return view('admin.laporan')->with(['no'=>$no, 'idUser'=>$idUser, 'users'=> $users, 'stores'=>$stores, 'name'=>$admin]);
    }
    function report(){
        $no=1;
        $users = User::where('role','user') ->get();
        $stores =Store::orderByDesc('riport')->orderBy('store_name')->get();
        $admin= Auth::user()->name;
        $idUser=Auth::user()->id;
        return view('admin.laporan')->with(['no'=>$no, 'idUser'=>$idUser, 'users'=> $users, 'stores'=>$stores, 'name'=>$admin]);
    }


    function productUser($id){
        $name=Auth::user()->name;
        $data=Product::where('id_product',$id)->first();

        return view('Test.admin')->with(['data'=>$data, 'name'=>$name]);
    }
    function profil(){
        $data=Auth::user();
        return view('Test.formAdmin.formProfil')->with(['data'=>$data]);
    }
}
