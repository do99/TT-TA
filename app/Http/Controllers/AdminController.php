<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
       return view('/cpanel');
    }

    function admin(){
        return view('/cpanel');
    }

    function employee(){
        return view('/cpanel');
    }
}
