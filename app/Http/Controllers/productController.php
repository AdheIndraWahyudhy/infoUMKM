<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class productController extends Controller
{
    function index(){
        $no=1;
        $userName=Auth::user()->name;
        $idUser=Auth::user()->id;
        $store=Store::where('user_id',$idUser)->first();
        $products=Product::where('store_id',$store->id_store)->get();

        return view('Test.formUser.formProduct')->with(['no'=>$no, 'store'=>$store,'user'=>$userName,'products'=>$products]);
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
            'product_name'=>$request->input('product_name'),
            'product_price'=>$request->input('product_price'),
            'description'=>$request->input('description'),
        ];
        Product::create($newProduct);
        return redirect('user/product');
    }
    function editProduct($id){
        $edit='edit';
        $no=1;
        $userName=Auth::user()->name;
        $idUser=Auth::user()->id;
        $store=Store::where('user_id',$idUser)->first();
        $products=Product::where('store_id',$store->id_store)->get();
        $productEdit=Product::where('id_product',$id)->first();
        return view('Test.formUser.formProduct')->with(['no'=>$no,'idUser'=>$idUser, 'user'=>$userName, 'products'=>$products,'edit'=>$edit, 'productEdit'=>$productEdit]);
    }
    function updateProduct(Request $request, $id){
        $idUser=Auth::user()->id;
        $store=Store::where('user_id',$idUser)->first();
        $recentData=Product::where('id_product',$id)->first();
        $recentImage=$recentData->product_image;
        if($request->hasFile('product_image')){
            unlink(public_path('/ProductsImg/'.$recentImage));
            $image=$request->file('product_image');
            $newFileName='img' . date('ymdhis') . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/ProductsImg'), $newFileName);
            $updateProduct=[
                'store_id'=>$store->id_store,
                'product_image'=>$newFileName,
                'product_name'=>$request->input('product_name'),
                'product_price'=>$request->input('product_price'),
                'description'=>$request->input('description'),
            ];
            Product::where('id_product',$id)->update($updateProduct);
            return redirect('user/product');
        }
        $product=[
            'store_id'=>$store->id_store,
            'product_image'=>$recentImage,
            'product_name'=>$request->input('product_name'),
            'product_price'=>$request->input('product_price'),
            'description'=>$request->input('description'),
        ];
        Product::where('id_product',$id)->update($product);

        return redirect('user/product');
    }
    function deleteProduct($id){
        $recentData=Product::where('id_product',$id)->first();
        $recentImage=$recentData->product_image;
        unlink(public_path('ProductsImg/'.$recentImage));
        
        $recentData->delete();
        return redirect('user/product');
    }
    
}
