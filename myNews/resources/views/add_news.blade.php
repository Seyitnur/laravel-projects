@extends('layouts.app')

@section('title')
Add News
@endsection

@section('content')
<h1>Add News</h1>

<form action="{{ route('save_news') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" id="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-2">SAVE</button>
</form>
@endsection
