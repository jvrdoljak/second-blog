@extends('main')

@section('title', '| All terms')

@section('content')

<div class="row mt-2">
    <div class="col-md-10">
        <h1>All terms</h1>
    </div>
    <div class="col-md-2">
        <a href=" {{ route('terms.create') }} " class="btn btn-success">Create new term</a> 
    </div>
</div>
<hr>
<div class="row mt-2">
    <table class="table">
        <thead>
            <th>#</th>
            <th>Term type</th>
            <th>Description</th>
            <th>Start time</th>
            <th>Duration</th>
            <th> </th>
            <th> </th>
        </thead>
        <tbody>
            @foreach($terms as $term)
            <tr>
                <td> {{ $term->id }} </td>
                <td> <a href=" {{ route('terms.show', $term->id) }} ">{{ $term->types->title }}</a> </td>
                <td> {{ $term->description }} </td>
                <td> {{ $term->start_time }} </td>
                <td> {{ $term->types->duration }} {{ $term->types->duration > 1 ? 'mins' : 'min' }} </td>
                <td> <a href=" {{ route('terms.edit', $term->id) }} " class="btn btn-block btn-outline-secondary mr-2">Edit</a> </td>
                <td> {!! Form::open(array('route' => array('terms.destroy', $term->id), 'method' => 'DELETE'))  !!}
                        {{ Form::submit('Delete', array('class' => 'btn btn-block btn-outline-danger mr-2')) }}
                     {!! Form::close() !!} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection