@extends('main')

@section('title', ' | Create post')

@section('content')

<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1 align="center">Create new post!</h1>
        <hr>    
        {!! Form::open(array('route' => 'posts.store')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array( 'class' => 'form-control')) }}

            {{ Form::label('body', 'Body:') }}
            {{ Form::textarea('body', null, array( 'class' => 'form-control' )) }}

            {{ Form::submit('Create post', array( 'class' => 'form-control btn btn-block btn-success mt-2')) }}
        {!! Form::close() !!}
    </div>
</div>


@endsection