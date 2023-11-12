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
        $totproject = Project::count();
        $totclient = Client::count();
        $employees = User::count();
        $projects = Project::with('user')->get();
        $clientpro = Client::with('project')->get();
        $userpro = User::with('project')->get();
        return view('pages.dashboard', compact('clients', 'totclient', 'employees', 'projects', 'clientpro', 'userpro', 'totproject'));
        
    }

    function project(){
        $userID = Auth::id();
        $clients = User::all();
        $project = Project::where('user_id', $userID)->get();
        $projects = Project::with('user')->get();
        $clientpro = Client::with('project')->get();
        $userpro = User::with('project')->get();
        return view('pages.project', compact('clients', 'projects', 'clientpro', 'userpro', 'project'));
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



        public function InsertProject(Request $request){


            $insert = New Project;
            $insert->user_id = $request->programmer;
            $insert->client_id = $request->v_id;
            $insert->status = $request->status ?: 'On Progress';
            $insert->taskdescription = $request->taskdescription ?: '-';

            $insert->save();


            return redirect(route('pages.approval'));

            // dd($insert);
            

        }

}
