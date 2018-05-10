@extends('main')

@section('title', '| Edit post')

@section('content')

<div class="row mt-2">
    <div class="col-md-8 offset-md-2">
            <h1 align="center">Edit post</h1>
            <hr>  
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}

            {{ Form::text('title', null, array( 'class' => 'form-control')) }}
            {{ Form::textarea('body', null, array('class' => 'form-control mt-2')) }}
        
           
        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block mt-2')) !!}
        {{ Form::submit('Save Changes', array('class' => 'form-control btn btn-success btn-block mt-2')) }} 
   
    {!! Form::close() !!}
    </div>
</div>

@endsection