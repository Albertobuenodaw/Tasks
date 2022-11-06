@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-5">
        <form action="{{route('tasks-update'),['id'=> $tasks->id]}}" method="post">
        @csrf
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            
        @endif
        @error('name')
            <h6 class="alert aalert-danger">{{$message}}</h6>
        @enderror
            <div class="form-group mb-3" >
                <label for="name">New Task</label>
                <input type="text" class="form-control" id="name" aria-describedby="taskHelp" value="{{$tasks->name}}" placeholder="Task name" name="name">
                <small id="taskHelp" class="form-text text-muted">Done is better than perfect!</small>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color:transparent; color: black; border-color: grey;"><b>+</b> Add Task</button>
        </form>
    </div>
@endsection