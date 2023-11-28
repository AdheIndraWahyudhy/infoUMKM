<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}
