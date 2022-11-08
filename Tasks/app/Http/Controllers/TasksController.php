<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    function index(){
        $tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);
    }

    function store(Request $request){
        $task = new Task;
        $task->name = $request->name;
        $task->save();
        
        return redirect()->route('tasks')->with('success', 'Task created successfully');
    }

    
    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks')->with('success', 'Task deleted successfully');
    }

    function show($id){
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    function update(Request $request, $id){
        $task = Task::find($id);
        $task->name = $request->name;
        $task->save();

        return redirect()->route('task')->with('success', 'Task updated successfully');
    }
}
