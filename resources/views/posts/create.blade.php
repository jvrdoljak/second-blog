@extends('main')

@section('title', ' | Create post')

@section('content')

<div class="row">
    {!! Form::open(['url' => 'foo/bar']) !!}
    
    {!! Form::close() !!}
</div>


@endsection