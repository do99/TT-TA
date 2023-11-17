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
        $totproject = Project::where('status', 'On Progress')->count();
        $totclient = Client::count();
        $employees = User::where('id', '!=', 6)->count();
        $projects = Project::where('status', 'On Progress')->get();
        $clientpro = Client::with('project')->get();
        $userpro = User::with('project')->get();

        // dd($totproject);
        
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
        $clients = Client::where('status', 'Pending')->get();
        $roles = User::all();
        $rolesUser = User::first()->id;
        // $users = Client::findOrFail();
        return view('pages.approval', compact('clients', 'roles', 'rolesUser'));
    }

    function client(){
        $roles = User::all();
        $clients = Client::all();
        $rolesID = Project::where('client_id')->get();
        $data = Project::where('status','Pending')->get();
        // dd($data);
        return view('pages.client', compact('clients', 'roles' , 'data'));
    }

    function store(Request $request){

        $insert = new Client;
        $insert->name = $request->name;
        $insert->phone = $request->phone;
        $insert->email = $request->email;
        $insert->address = $request->address;
        $insert->details = $request->details;
        $insert->prices = $request->prices;
        $insert->status = $request->status ?: 'Pending';


        $insert->save();
        $getProject = 0;
        $getUser = 0;
        $postPro = Client::where('email', $request->email)->get();
        $userID = User::where('id', 6)->get();
        
        foreach($postPro as $data){
            $getProject = $data->id;
        }

        foreach($userID as $data){
            $getUser = $data->id;
        }
       
        // dd($userID);

        $Postproject = new Project;
        $Postproject->user_id = $getUser;
        $Postproject->client_id = $getProject;
        $Postproject->status = "Pending";
        $Postproject->taskDescription = "-";


        $Postproject->save();

        // $newClient = Client::create($data);

        return redirect(route('pages.client'));
    }



        public function InsertProject(Request $request){
            // dd($request);
            $id = $request->v_id;
            $affected = Project::where('client_id', $id)
              ->update([
                'user_id'=> $request->programmer,
                'status'=> 'On Progress'
              ]);

            $updateClient = Client::where('id', $id)
              ->update([
                'status' => 'On Progress'
              ]);

            //   dd($affected);

            // $insert = New Project;
            // $insert->user_id = $request->programmer;
            // $insert->client_id = $request->v_id;
            // $insert->status = 'On Progress';
            // $insert->taskdescription = '-';

            // $insert->update();
            // dd($request);

            return redirect(route('pages.approval'));

            // dd($insert);
            

        }

}
