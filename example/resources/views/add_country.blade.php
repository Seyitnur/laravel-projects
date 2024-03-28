@extends('layouts.app')

@section('title')
Add Country
@endsection

@section('content')
<h1>Add Country</h1>

<form action="{{ route('save_country') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="population">Population:</label>
        <input type="number" name="population" placeholder="Population" id="population" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-2">SAVE</button>
</form>
@endsection
