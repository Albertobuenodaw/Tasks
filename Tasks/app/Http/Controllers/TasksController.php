<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //
    function index(){

    }

    function store(Requet $request){
        $request->validate([
            'name' => ' required'
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->save;

        return redirect()->route('tasks')->with('success','Task created successful');
    }

    function update(){

    }
    
    function destroy(){

    }

    function edit (){

    }
}
