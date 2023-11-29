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
        $users = User::where('role','user')->get();
        $stores =Store::get();
        $admin= Auth::user()->name;
        return view('Test.admin')->with(['users'=> $users, 'stores'=>$stores]);
    }
    function productUser($id){
        $data=Product::where('id_product',$id)->first();

        return view('Test')->with(['data'=>$data]);
    }
}
