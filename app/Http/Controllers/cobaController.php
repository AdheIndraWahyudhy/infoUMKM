<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cobaController extends Controller
{
    
    function index(){
        $user = Auth::user();

        if ($user) {
            return $user->name;
        } else {
            return "Pengguna tidak terotentikasi.";
        }
    }
}
