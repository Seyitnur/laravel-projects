@extends('layouts.app')

@section('title')
Change Password
@endsection

@section('content')
<h1>Change Password</h1>

<form action="{{ route('change_password') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Password(again)" id="password_confirmation" class="form-control">
    </div>

    <button type="submit" class="btn btn-success mt-2">SAVE</button>
</form>
@endsection
