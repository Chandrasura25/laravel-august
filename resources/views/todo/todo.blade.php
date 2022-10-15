@extends('todo.index')
@section('content')
    <div class="container">
        @if (Auth::user())
        <div class="row">
            <div class="col-lg-7 mx-auto mt-4 col-sm-12">
                <a href="/todo/create" class="p-3">
                  <button class="btn btn-info mb-2 text-white">Add Todo</button>
                </a>
                {{-- {{dd(Auth::user())}} --}}
                @foreach ($todos as $todo)
               <div class="row shadow p-2 mb-3">
                <div class="col-2">{{$todo->todo_name}}</div>
                <div class="col-2">{{$todo->todo_desc}}</div>
                <div class="col-3"><img src="{{asset("images/".$todo->image_name)}}" class="card" style="height: 100px;border-radius:50%"></div>
                <div class="col-2">
                  <a href="/todo/{{$todo->todo_id}}/edit">
                     <button class="btn btn-success">Edit</button>
                  </a>
                </div>
                <div class="col-3">
                    <a href="/todo/{{$todo->todo_id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>    
                </div>
             </div>
            @endforeach
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-12 col-md-6 mx-auto shadow p-5">
                <h1 class="text-center text-muted display-6">You are not logged in!!!!!</h1>
                <a href="/login">Login</a>
            </div>
        </div>
        @endif
    </div>
@endsection