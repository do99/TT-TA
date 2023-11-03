<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
       return view('/pages/dashboard');
    }

    function admin(){
        return view('/pages/dashboard');
    }

    function employee(){
        return view('/pages/dashboard');
    }

    function marketing(){
        return view('/pages/dashboard');
    }

    function dashboard(){
        return view('/pages/dashboard');
    }

    function client(){
        return view('/pages/client');
    }
}
