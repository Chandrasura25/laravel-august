@extends('todo.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-4 col-sm-12">
                <div class="shadow p-3">
                    <form action="/todo/{{$todo->todo_id}}/edit" method="post">
                        @csrf
                        <h5 class=" display-6 text-center text-info text-uppercase">Update todo</h5>
                        <input type="text" placeholder="Todo Title" name="todo_name" class="form-control mb-3" value="{{$todo->todo_name}}">
                        <input type="text" placeholder="Todo Description" name="todo_des" class="form-control mb-3" value="{{$todo->todo_desc}}">
                        <button class="btn btn-outline-success w-100" type="submit">Update Todo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection