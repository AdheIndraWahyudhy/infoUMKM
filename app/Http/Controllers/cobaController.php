<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cobaController extends Controller
{
    
    function index(){
        return Auth::user()->name;
    }
}
