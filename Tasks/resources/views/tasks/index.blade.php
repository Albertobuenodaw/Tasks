@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form>
            <div class="form-group">
                <label for="taskName">New Task</label>
                <input type="text" class="form-control" id="taskInput" aria-describedby="emailHelp" placeholder="Task name" name="taskName">
                <small id="taskHelper" class="form-text text-muted">Done is better than perfect!</small>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color:transparent; color: black; border-color: grey;"><b>+</b> Add Task</button>
        </form>
    </div>
@endsection