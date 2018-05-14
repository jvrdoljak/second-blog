@extends('main')

@section('title', '| Show term')

@section('content')
    <div class="row mt-2">    
        <a href=" {{ route('terms.index') }} " class="btn btn-light mr-2">All terms</a>
        <a href=" {{ route('terms.edit', $term->id) }} " class="btn btn-secondary mr-2">Edit</a>
        {!! Form::open(array('route' => array('terms.destroy', $term->id), 'method' => 'DELETE'))  !!}
            {{ Form::submit('Delete', array('class' => 'form-control btn btn-danger mr-2')) }}
        {!! Form::close() !!}
    </div>
    <hr>
    <div class="jubmotron bg-light col-md-4">
        <p><b>Description:</b> {{ $term->description }} </p>
        <p><b>Start time:</b><?php echo date('d M Y H:i:s', strtotime($term->start_time)); ?> </p>
        <p><b>Duration:</b> {{ $term->types->duration }} {{ $term->types->duration > 1 ? 'mins' : 'min' }} </p>
    </div>
@endsection