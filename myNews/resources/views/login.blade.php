@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<h1>Login</h1>

<form action="{{ route('login_user') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
    </div>
    <p>New on your site? <a href="{{ route('register') }}">Register</a></p>

    <button type="submit" class="btn btn-success mt-2">Login</button>
</form>
@endsection
