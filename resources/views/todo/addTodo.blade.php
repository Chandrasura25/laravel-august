@extends('todo.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-4 col-sm-12">
                <div class="shadow p-3">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    <form action="/todo/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <h5 class=" display-6 text-center text-info text-uppercase">add todo</h5>
                        <input type="text" placeholder="Todo Title" name="todo_name" class="form-control mb-3">
                        @error('todo_name')
                          <small>{{$message}} </small>
                        @enderror
                        <input type="text" placeholder="Todo Description" name="todo_desc" class="form-control mb-3">
                        <input type="file" name="image" class="form-control mb-3">
                        <button class="btn btn-outline-success w-100 mb-3" type="submit">Add Todo</button>
                    </form>
                    <a href="/todo">
                    <button class="btn btn-info w-100 text-light">View Todo</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection