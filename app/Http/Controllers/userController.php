<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Store;
use App\Models\SugRep;
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
    // Function untuk mengarah ke detail toko
    function detailStore($id){
        $userName=Auth::user()->name;
        $store=Store::where('id_store',$id)->first();
        $owner=User::find($store->user_id);
        $products=Product::where('store_id',$id)->get();
        $comments=SugRep::where('store_id',$id)->where('type', 'saran')->get();
        $ratings=Rating::where('store_id',$id)->get();
        return view('user.detail')->with(['user'=>$userName, 'store'=> $store,'products'=>$products,'owner'=>$owner, 'id'=>$id,'comments'=>$comments, 'ratings'=>$ratings]);
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
        $id=Auth::user()->id;
        $username=Auth::user()->name;
        $store=Store::where('user_id',$id)->first();
        $categories=Category::get();
        return view('user/store')->with(['id'=>$id, 'categories'=>$categories,'store'=>$store, 'user'=>$username]);
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
            'store_address'=>$request->input('store_address'),
            'store_image'=>$newFileName,
            'description'=>$request->description,
        ];
        Store::create($newStore);
        return redirect('user/store');
    }
    function updateStore(Request $request){
        $idUser=Auth::user()->id;
        $idStore=Store::where('user_id',$idUser)->first()->id_store;
        $recentImage=Store::where('user_id',$idUser)->first()->store_image;
        if($request->hasFile('store_image')){
            unlink(public_path('/storesImg/'.$recentImage));
            $image=$request->file('store_image');
            $newFileName='img' . date('ymdhis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/StoresImg'), $newFileName);
            $updateStore=[
                'user_id'=>Auth::user()->id,
                'category_id'=>$request->category_id,
                'owner'=>Auth::user()->name,
                'store_name'=>$request->store_name,
                'store_address'=>$request->input('store_address'),
                'store_image'=>$newFileName,
                'description'=>$request->description,
            ];
            Store::where('id_store',$idStore)->update($updateStore);
            return redirect('user/store');
            
        }
        $updateStore=[
            'user_id'=>Auth::user()->id,
            'category_id'=>$request->category_id,
            'owner'=>Auth::user()->name,
            'store_name'=>$request->store_name,
            'store_address'=>$request->input('store_address'),
            'store_image'=>$recentImage,
            'description'=>$request->description,
        ];
        Store::where('id_store',$idStore)->update($updateStore);

        return redirect('user/store');
    }
}
