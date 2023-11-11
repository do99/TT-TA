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
            <div class="cBox">
                <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <td>Task</td>
                            <td>Task Description</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    @foreach ($clients as $client)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

   
@endsection