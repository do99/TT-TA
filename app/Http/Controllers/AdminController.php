<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
       return view('/pages/cpanel');
    }

    function admin(){
        return view('/pages/cpanel');
    }

    function employee(){
        return view('/pages/cpanel');
    }

    function marketing(){
        return view('/pages/cpanel');
    }

    function dashboard(){
        return view('/pages/dashboard');
    }

    function client(){
        return view('/pages/client');
    }
}
