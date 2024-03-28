@extends('layouts.app')

@section('title')
{{ Auth::user()->name }}
@endsection

@section('content')
<h1>{{ Auth::user()->name }}</h1>
<a href="{{ route('password') }}">Change Password</a><br>
<a href="{{ route('add_news') }}">Add News</a><br>
<a href="{{ route('logout') }}" class="btn btn-primary">LogOut</a>
@endsection
