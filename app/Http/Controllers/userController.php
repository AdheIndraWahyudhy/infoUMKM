<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    // Function pengetesan
    function index(){
        $no=1;
        $userName=Auth::user()->name;
        $idUser=Auth::user()->id;
        $store=Store::where('user_id',$idUser)->first();
        if($store != null){
            $products=Product::where('store_id',$store->id_store)->get();
            return view('user.umkm')->with(['no'=>$no, 'store'=>$store,'user'=>$userName,'products'=>$products]);
        }else
        return view('user.umkm')->with(['no'=>$no, 'store'=>$store,'user'=>$userName]);
        
    }
    // Function Untuk mengarah ke halaman UMKM pada user
    function umkm(){
        $stores=Store::get();
        $userName=Auth::user()->name;
        $idUser=Auth::user()->id;
        $store=Store::where('user_id',$idUser)->first();
        if($store != null){
            $products=Product::where('store_id',$store->id_store)->get();
            return view('user.umkm')->with(['stores'=>$stores, 'store'=>$store,'user'=>$userName,'products'=>$products]);
        }else
        return view('user.umkm')->with(['stores'=>$stores, 'store'=>$store,'user'=>$userName]);
    }
    // Function yang berkaitan dengan Akun User
    function account(){
        $data=Auth::user();
        return view('Test.formUser.formAccount')->with(['data'=>$data]);
    }

    function updateUser(Request $request){
        $dataLogin=Auth::user();
        if(isset($request->password)){
            $data=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
                'number_phone'=>$request->input('number_phone')
            ];
            User::where('id',$dataLogin->id)->update($data);
            return redirect('user/account');
        }
        $data=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'number_phone'=>$request->input('number_phone')
        ];
        User::where('id',$dataLogin->id)->update($data);
        return redirect('user/account');
    }

    // Function yang berkaitan dengan toko
    function makeStore(){
        $categories=Category::get();
        return view('Test.createStore')->with(['categories'=>$categories]);
    }
    function createStore(Request $request){
        $gambar=$request->file('store_image');
        $newFileName='img' . date('ymdhis') . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('StoresImg'),$newFileName);
        $newStore=[
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category_id,
            'owner'=>Auth::user()->name,
            'store_name'=>$request->store_name,
            'store_address'=>$request->store_address,
            'store_image'=>$newFileName,
            'description'=>$request->description,
        ];
        Store::create($newStore);
        return redirect('user');
    }
}
