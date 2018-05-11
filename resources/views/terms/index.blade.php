@extends('main')

@section('title', '| All terms')

@section('content')

<div class="row mt-2">
    <h1>All terms</h1>
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
                <td> {{ $term->term_type }} </td>
                <td> {{ $term->description }} </td>
                <td> {{ $term->start_time }} </td>
                <td> {{ $term->term_type }} </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection