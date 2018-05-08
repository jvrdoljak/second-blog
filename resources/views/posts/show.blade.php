@extends('main')

@section('title', '| Show posts')

@section('content')

    <h1>{{ $post->title }}</h1>
    <hr>
    <p class="lead">{{ $post->body }}</p>
    
@endsection