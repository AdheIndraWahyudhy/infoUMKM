<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    function index(){
        $userName=Auth::user()->name;
        $idUser=Auth::user()->id;
        $store=Store::where('user_id',$idUser)->first();
        return view('Test.user')->with(['store'=>$store,'user'=>$userName]);
        
    }
    function makeStore(){
        $categories=Category::get();
        return view('Test.createStore')->with(['categories'=>$categories]);
    }
    function createStore(Request $request){
        
    }
}
