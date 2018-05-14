@extends('main')

@section('title', '| Show posts')

@section('content')
    <div class="row mt-2">
        <a href="{{ route('posts.index') }}" class="btn btn-light mr-2">All posts</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary mr-2">Edit</a>
        {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'DELETE'))  !!}
            {{ Form::submit('Delete', array('class' => 'form-control btn btn-danger')) }}
        {!! Form::close() !!}
    </div>
    <hr>
    <h1>{{ $post->title }}</h1>

    <p class="lead">{{ $post->body }}</p>
    
@endsection