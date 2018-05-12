@extends('main')

@section('title', '| Show term')

@section('content')

    <p><b>Description:</b> {{ $term->description }} </p>
    <hr>
    <p><b>Start time:</b> {{ $term->start_time }} </p>
    <hr>
    <p><b>Duration:</b> {{ $term->types->duration }} {{ $term->types->duration > 1 ? 'mins' : 'min' }} </p>

@endsection