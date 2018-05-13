@extends('main')

@section('title', '| Edit term')

@section('content')

<div class="row mt-2 offset-md-5">
    <h1>Edit post</h1>
</div>
<hr>
<div class="row mt-2">
    <div class="col-md-8 offset-md-2">
        {!! Form::model( $data['term'], array( 'route' => array( 'terms.update', $data['term']->id), 'method' => 'PUT' )) !!}

            {{ Form::text('description', null, array('class' => 'form-control mt-2')) }}
            {{ Form::text('start_time', null, array('class' => 'form-control mt-2')) }}
            <select name="term_type" class="form-control mt-2">
                @foreach($data['types'] as $type)
                    <option value = " {{ $type->id }} "> {{ $type->title }} </option>                    
                @endforeach
            </select>    
            {{ Form::submit('Save changes', array('class' => 'form-control btn btn-block btn-success mt-2')) }}
        {!! Form::close() !!}
    </div>
</div>
@endsection