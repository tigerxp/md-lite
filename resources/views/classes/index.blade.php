@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h1>Classes</h1>
            <ul class="list-group">
                @foreach($classes as $class)
                    <li class="list-group-item">{{ $class->title }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop
