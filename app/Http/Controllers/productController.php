<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class productController extends Controller
{
    function formProduct(){
        return view('Test.formProduct');
    }
    function createProduct(Request $request){
        $gambar=$request->file('product_image');
        $newFileName='img' . date('ymdhis') . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('ProductsImg'),$newFileName);

        $userId=Auth::user()->id;
        $store=Store::where('user_id',$userId)->first();
        $newProduct=[
            'store_id'=>$store->id_store,
            'product_image'=>$newFileName,
            'product_name'=>$request->product_name,
            'product_price'=>$request->product_price,
            'description'=>$request->description,
        ];
        Product::create($newProduct);
        return redirect('user');
    }
    function editProduct($id){
        $edit='edit';
        $product=Product::where('id_product',$id)->first();
        return view('Test.formProduct')->with(['product'=>$product,'edit'=>$edit]);
    }
    function deleteProduct($id){
        Product::where('id_product',$id)->delete();
        return redirect('user');
    }
    
}
