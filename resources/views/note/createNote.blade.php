@extends('note.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto mt-4 col-sm-12">
                <div class="shadow p-3">
                    <form action="/note" method="post">
                        @csrf
                        <h5 class="display-6 text-center text-info text-uppercase">add note</h5>
                        <input type="text" placeholder="Note Title" name="note_title" class="form-control mb-3">
                        <textarea type="text" placeholder="Your Note here...." name="note" class="form-control mb-3"></textarea>
                        <button class="btn btn-outline-primary w-100 mb-3" type="submit">Add Note</button>
                    </form>
                    <a href="/note">
                    <button class="btn btn-info w-100 text-light">View Note</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection