<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index(){
       return view('/pages/dashboard');
    }

    function dashboard(){
        $clients = Client::all();
        $totclient = Client::count();
        $employees = User::count();
        return view('pages.dashboard', compact('clients', 'totclient', 'employees'));
        
    }

    function project(){
        $clients = User::all();
        // $projects = Project::with('');
        return view('pages.project', compact('clients'));
    }
    
    function approval(){
        $clients = Client::all();
        $roles = User::all();
        $rolesUser = User::first()->id;
        // $users = Client::findOrFail();
        return view('pages.approval', compact('clients', 'roles', 'rolesUser'));
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

        $insert->save();
        // $newClient = Client::create($data);

        return redirect(route('pages.client'));
    }

        public function show($id)
        {
            $clients = Client::findOrFail($id);

            return view('show');
        }


        public function InsertProject(Request $request){
            

            $insert = New Project;
            $insert->user_id = $request->programmer;
            $insert->client_id = $request->v_id;
            $insert->status = $request->status;

            $insert->save();
            
            // dd($insert);
            

        }

}
