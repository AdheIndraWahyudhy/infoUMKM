<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Rating;
use App\Models\Store;
use App\Models\SugRep;
use App\Models\User;
use Illuminate\Http\Request;

class halamanController extends Controller
{
    function dashboard(){
        $categories=Category::get();
        return view('dashboard.home')->with(['categories' => $categories]);
    }
    function category($id){
        $Stores=Store::where('category_id',$id)->where('status','Tidak Bermasalah')->get();
        $categoryName=Category::Where('id_category',$id)->first()->category_name;
        return view('dashboard.category')->with(['stores' => $Stores,'categoryName' => $categoryName]);
    }
    function favoriteStore(){
        $storesSorted = Store::where('status','Tidak Bermasalah')->orderByDesc('rating')->orderBy('store_name')->get();
        return view('dashboard.favorite')->with(['stores'=> $storesSorted]);
    }
    function detailStore($id){
        $store=Store::where('id_store',$id)->first();
        $owner=User::find($store->user_id);
        $products=Product::where('store_id',$id)->get();
        $comments=SugRep::where('store_id',$id)->where('type', 'saran')->get();
        $ratings=Rating::where('store_id',$id)->get();
        return view('dashboard.detail')->with(['store'=> $store,'products'=>$products,'owner'=>$owner, 'id'=>$id,'comments'=>$comments, 'ratings'=>$ratings]);
    }
    function umkm(){
        $stores = Store::where('status','Tidak Bermasalah')->get();
        return view('dashboard.umkm')->with(['stores'=> $stores]);
    }
    function aboutus(){
        return view('dashboard/about-us');
    }

    function sendRatingSuggestion(Request $request, $id){
        $newSuggest=[
            'store_id'=>$id,
            'type'=>'saran',
            'message'=>$request->input('message'),
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
    function reportAccount(Request $request, $id) {
        $newReport=[
            'message'=>$request->input('reportReason'),
            'type'=>'laporan',
            'store_id'=>$id,
        ];
        SugRep::create($newReport);
        $reportCount=Sugrep::where('store_id',$id)->where('type','laporan')->count();
        Store::Where('id_store',$id)->update(['total_reports'=>$reportCount]);
        session(['reportSuccess' => true]);
        return redirect('store/'.$id)->with('success','Berhasil Melaporkan toko');
    }

    function close($id){
        session(['reportSuccess' => false]);
        return redirect('store/'.$id)->with('success','Berhasil Melaporkan toko');
    }
}
