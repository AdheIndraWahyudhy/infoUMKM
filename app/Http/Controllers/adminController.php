<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use App\Models\Store;
use App\Models\SugRep;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    function index(){
        $no=1;
        $users = User::where('role','user')->get();
        $stores =Store::get();
        $admin= Auth::user()->name;
        $idUser=Auth::user()->id;
        return view('admin.laporan')->with(['no'=>$no, 'idUser'=>$idUser, 'users'=> $users, 'stores'=>$stores, 'name'=>$admin]);
    }
    function report(){
        $no=1;
        $users = User::where('role','user') ->get();
        $stores =Store::orderByDesc('riport')->orderBy('store_name')->get();
        $admin= Auth::user()->name;
        $idUser=Auth::user()->id;
        return view('admin.laporan')->with(['no'=>$no, 'idUser'=>$idUser, 'users'=> $users, 'stores'=>$stores, 'name'=>$admin]);
    }


    function productUser($id){
        $name=Auth::user()->name;
        $data=Product::where('id_product',$id)->first();

        return view('Test.admin')->with(['data'=>$data, 'name'=>$name]);
    }
    function profil(){
        $data=Auth::user();
        return view('admin.profil-baru')->with(['data'=>$data]);
    }
    
    function profilUpdate(Request $request){
        $dataLogin=Auth::user();
        $request->validate([
            // proses pengecekan/validasi
            // required artinya di perlukan
            'name' =>'required',
            'email' =>'required|email',
            'number_phone' =>'required'

        ],[
            'name.required' =>'Nama Wajib di isi',
            'email.required' =>'Email Wajib di isi',
            'email.email' =>'Masukkan email dengan benar',
            'name.unique' =>'Username Sudah terdaftar',
            'number_phone.required' =>'Masukkan Nomor HP/WhatsApp',
        ]);
        if(isset($request->password)){
            $request->validate([
                // proses pengecekan/validasi
                // required artinya di perlukan
                'name' =>'required',
                'email' =>'required|email',
                'password' =>'required|min:5',
                'number_phone' =>'required'
    
            ],[
                'name.required' =>'Nama Wajib di isi',
                'email.required' =>'Email Wajib di isi',
                'email.email' =>'Masukkan email dengan benar',
                'number_phone.required' =>'Masukkan Nomor HP/WhatsApp',
                'password.min' =>'Masukkan password minimum 5 karakter',
                'password.required' =>'Password Wajib di isi',
            ]);
            $data=[
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'password'=>Hash::make($request->input('password')),
                'number_phone'=>$request->input('number_phone')
            ];
            User::where('id',$dataLogin->id)->update($data);
            return redirect('admin/profile')->with('success','Berhasil Memperbarui Akun');
        }
        $data=[
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'number_phone'=>$request->input('number_phone')
        ];
        User::where('id',$dataLogin->id)->update($data);
        return redirect('admin/profile')->with('success','Berhasil Memperbarui Akun');
    }

    function usersList(){
        $no=1;
        $admin=Auth::user()->name;
        $users=User::where('role','user') ->get();
        $stores=Store::get();
        return view('admin/user')->with(['users'=>$users,'no'=>$no, 'admin'=>$admin, 'stores'=>$stores]);

    }

    function detailUser($id){
        $admin=Auth::user()->name;
        $store=Store::where('user_id',$id)->first();
        $owner=User::find($store->user_id);
        $products=Product::where('store_id',$store->id_store)->get();
        $comments=SugRep::where('store_id',$store->id_store)->where('type', 'saran')->get();
        $ratings=Rating::where('store_id',$store->id_store)->get();
        return view('admin.detail')->with(['admin'=>$admin, 'store'=> $store,'products'=>$products,'owner'=>$owner, 'id'=>$id,'comments'=>$comments, 'ratings'=>$ratings]);
    }

    function detailLaporan($id){
        $admin= Auth::user()->name;
        $reports=SugRep::where('store_id',$id)->where('type','laporan')->get();
        return view('admin.detail-laporan')->with(['admin'=>$admin, 'reports'=>$reports]);
    }

    function stopTheStore($id){
        Store::where('id_store',$id)->update(['status'=> 'Bermasalah']);
        return redirect('admin');
    }
    function restoreTheStore($id){
        Store::where('id_store',$id)->update(['status'=> 'Tidak Bermasalah']);
        return redirect('admin');
    }
    function deleteStore($id){
        $products=Product::where('store_id',$id)->get();
        foreach($products as $product){
            $imagePath = public_path('ProductsImg/' . $product->product_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        Product::where('store_id', $id)->delete();
        $store=Store::where('id_store',$id)->first();
        unlink(public_path('StoresImg/'.$store->store_image));
        $store->delete();
        return redirect('admin');
    }
    function deleteAccount($id){
        $store=Store::where('user_id',$id)->first();
        $products=Product::where('store_id',$store->id_store)->get();
        if ($products->count() != 0) {
            foreach ($products as $product) {
                $imagePath = public_path('ProductsImg/' . $product->product_image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            // Menghapus record dari database
            Product::where('store_id', $store->id_store)->delete();
        }
        if($store->count() != 0) {
            $imagePath = public_path('StoresImg/'.$store->store_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            SugRep::where('store_id', $store->id_store)->delete();
            // $store->delete();
            Store::where('id_store',$store->id_store)->delete();
        }
        User::where('id',$id)->delete();
        return redirect('admin/users');
    }
}
