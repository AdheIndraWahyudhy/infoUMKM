<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Store;
use App\Models\SugRep;
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
        return view('Test.detailStore')->with(['store'=> $store,'product'=>$product]);
    }
    function ratingSuggestion($id){
        return view('Test.formRatingSuggestion')->with('id',$id);
    }

    function sendRatingSuggestion(Request $request, $id){
        $newSuggest=[
            'store_id'=>$id,
            'type'=>'saran',
            'message'=>$request->sugesstion,
        ];
        $newRating=[
            'store_id'=>$id,
            'rating'=>$request->rating,

        ];
        SugRep::create($newSuggest);
        Rating::create($newRating);
        $ratings=Rating::where('store_id',$id)->get();
        $ratingsCount = Rating::where('store_id',$id)->count();
        $totalRating = 0;    // Variabel untuk menghitung total rating

        foreach ($ratings as $rating) {
            $totalRating += $rating->rating;
        }

        $averageRating = $totalRating / $ratingsCount;
        $updateRatingStore=[
            'rating'=>$averageRating
        ];
        Store::where('id_store',$id)->update($updateRatingStore);
        return redirect('store/'.$id);

    }
}
