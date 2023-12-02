<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class halamanController extends Controller
{
    function dashboard(){
        $categories=Category::get();
        return view('Test.dashboard')->with(['categories' => $categories]);
    }
    function category($id){
        $Stores=Store::where('category_id',$id)->get();
        return view('Test.categories')->with(['stores' => $Stores]);

    }
    function favoriteStore(){
        $storesSorted = Store::orderByDesc('rating')->orderBy('store_name')->get();
        return view('dashboard.favorite')->with(['stores'=> $storesSorted]);
    }
    function detailStore($id){
        $store=Store::where('id_store',$id)->first();
        $product=Product::where('store_id',$id)->get();
        return view('dashboard.detail')->with(['stores'=> $store,'product'=>$product]);
    }
}
