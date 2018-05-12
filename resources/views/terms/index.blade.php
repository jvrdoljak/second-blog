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
        </thead>
        <tbody>
            @foreach($terms as $term)
            <tr>
                <td> {{ $term->id }} </td>
                <td> {{ $term->types->title }} </td>
                <td> {{ $term->description }} </td>
                <td> {{ $term->start_time }} </td>
                <td> {{ $term->types->duration }} {{ $term->types->duration > 1 ? 'mins' : 'min' }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection