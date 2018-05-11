@extends('main')

@section('title', '| Make term')

@section('content')
<div class="row col-md-4 mt-2">
    <h1>Create term</h1>
</div>
<hr>
<div class="row mt-4">
    <div class="col-md-4">
        {!! Form::open(array('route' => 'terms.store')) !!}
            {{ Form::text('description', null, array('class' => 'form-control mt-2', 'placeholder' => 'Description')) }}    

            {{ Form::text('start_time', null, array('class' => 'form-control mt-2', 'placeholder' => 'Start time: "YYYY-MM-DD HH:MM:SS"')) }}
            {{ Form::select('term_type', [
                '1' => 'Universal'],
                1, array('class' => 'form-control mt-2')) }} 
           
           {{ Form::submit('Save term', array('class' => 'form-control btn btn-block btn-success mt-2')) }}   
        {!! Form::close() !!}
    </div>
</div>
@endsection
