@extends('layouts.base')

@section('content')
    <div class="container">
    <h1>
        Create Notebooks
    </h1>
    <form action="/notebookapp/public/notebooks" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">
                Notebook Name
            </label>
            <input class="form-control" name="name" type="text">

        </div>
        <input class="btn btn-primary" type="submit" value="Done">
    </form>
    </div>

@endsection
