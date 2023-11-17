@extends('pages.cpanel')

@section('content')
        <div class="todolist">
            <div class="todo">
                <div class="tdl">

                        <a href=""><ion-icon name="list-outline"></ion-icon></a>
                    </div>
                    <div class="teks">
                        Todo List !
                        <span>"Sometimes our stop-doing list needs to bigger than our to-do-list."</span>
                </div>
            </div>
        </div>
              <div class="details" style="grid:none !important;">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Approval List</h2>
                    </div>
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <td>Task</td>
                                <td>Task Description</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        @foreach ($project as $client)
                        <tr>
                            <td >{{ $client->client->details }}</td>
                            <td >{{ $client->taskdescription }}</td>
                            <td>
                                <button data-modal-target="default-modal" data-id="'.$client->id." data-modal-toggle="default-modal" class="block text-xl text-blue-500	hover:text-white userView" type="button">
                                    <ion-icon name="eye-outline"></ion-icon>                                </button>
                            </td>
                       </tr>
                        @endforeach
                    </table>
                </div>
            </div>
@endsection