@extends('main')

@section('title','| All posts')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>All posts</h1>
        </div>
        <div class="col-md-2">
            <a href="posts/create" class="btn btn-block btn-success mt-2">Create new post</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th> </th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}"> {{ $post->title }} </a></td>
                        <td>{{ substr($post->body, 0, 40)}}{{ strlen($post->body) > 40 ? '...' : '' }}</td>
                        <td>{{ date('d M Y H:i:s', strtotime($post->created_at)) }}</td>
                        <td>{{ date('d M Y H:i:s', strtotime($post->updated_at)) }}</td>
                        <td><a href="#" class="btn btn-block btn-outline-secondary">Edit</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@stop