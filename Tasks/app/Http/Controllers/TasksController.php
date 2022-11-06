<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //
    function index(){
        $tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);
    }

    function store(Request $request){
        $request->validate([
            'name' => ' required'
        ]);

        $task = new Task;
        $task->name = $request->name;
        $task->save;

        return redirect()->route('tasks')->with('success', 'Task created successfully');
    }

    function show($id){
        $task = Task::find($id);
        return view('tasks.show', ['tasks' => $tasks]);
    }

    function update(){
        $task = Task::find($id);
        
        $task->name = $request->name;
        $task->save();

        return redirect()->route('tasks')->with('success', 'Task updated successfully');
    }
    
    function destroy(){

    }

   
}
