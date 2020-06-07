@extends('layouts.base')

@section('content')
    <div class="container text-xs-justify">
        <div class="row">
            <h4 class="display-3">
                {{ucfirst($note->title)}}
            </h4>
            <div class="bodyu">
                {{$note->body}}
            </div>
        </div>
    </div>
@endsection
