@extends('layouts.app')

@section('title')
Register
@endsection

@section('content')
<h1>Register</h1>

<form action="{{ route('register_user') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Name" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Password(again)" id="password_confirmation" class="form-control">
    </div>
    <p>Aleady have an account? <a href="{{ route('login') }}">Login</a></p>

    <button type="submit" class="btn btn-success mt-2">Register</button>
</form>
@endsection
