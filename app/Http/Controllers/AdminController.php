<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // function index(){
    //    return view('/pages/dashboard');
    // }

    // function admin(){
    //     return view('/pages/dashboard');
    // }

    // function employee(){
    //     return view('/pages/dashboard');
    // }
    function dashboard(){
        $clients = Client::all();
        $totclient = Client::count();
        return view('pages.dashboard', compact('clients', 'totclient'));
        
    }

    function project(){
        return view('/pages/project');
    }

    function client(){
        $roles = User::all();
        $clients = Client::all();
        return view('pages.client', ['clients' => $clients, 'roles' => $roles]);
    }

    function store(Request $request){
        // dd($request);
        // $data = $request->validate([
        //     'name'=>'required',
        //     'phone'=>'required',
        //     'email'=>'required',
        //     'address'=>'required',
        //     'details'=>'required',
        //     'prices'=>'required',
        //     'details'=>'required',
        //     'status'=>'required',

        // ]);
        $insert = new Client;
        $insert->name = $request->name;
        $insert->phone = $request->phone;
        $insert->email = $request->email;
        $insert->address = $request->address;
        $insert->details = $request->details;
        $insert->prices = $request->prices;
        $insert->status = 1;

        $insert->save();
        // $newClient = Client::create($data);

        return redirect(route('pages.client'));
    }
}
