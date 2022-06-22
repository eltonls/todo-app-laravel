@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <form action="store-data" method="post" class="m-4 py-4">
        @csrf
        <div class="form-group m-3">
            <label for="name" class="text-white">Todo Name</label>
            <input type="text" class="form-control bg-dark text-white border-dark" name="name">
        </div> 
        <div class="form-group m-3">
            <input type="submit" class="btn btn-primary float-end" value="Add">
        </div>
    </form>

    <div class="row mt-3">
        <div class="col-12 align-self-center">
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li id="todo" class="list-group-item d-flex flex-row bg-dark text-white justify-content-between align-items-center"> 
                        {{$todo->name}} 
                        <a href="/delete/{{$todo->id}}"><span class="btn btn-outline-danger">Delete</span></a>  
                    </li> 
                @endforeach
            </ul>
        </div>
    </div>

@endsection
