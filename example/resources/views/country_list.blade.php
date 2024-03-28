@extends('layouts.app')

@section('title')
List of Countries
@endsection

@section('content')
<h1>List of Countries</h1>
<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Population</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
    @foreach ($countries as $country)
    <tr>
        <td>{{ $country->id }}</td>
        <td>{{ $country->name }}</td>
        <td>{{ $country->population }} people</td>
        <td>{{ $country->created_at }}</td>
        <td>{{ $country->updated_at }}</td>
    </tr>
    @endforeach
</table>
@endsection
