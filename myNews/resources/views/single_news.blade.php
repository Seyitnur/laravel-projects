@extends('layouts.app')

@section('title')
{{ $one_news->name }}
@endsection

@section('content')
<div class="card">
    <div class="card-body" >
        <img src="{{ $one_news->image }}" alt="" style="width: 100%; height: 300px;">
        <h1 class="card-title">{{ $one_news->name }}</h1>
        <h4 class="card-title">{{ $one_news->author }}</h4><hr>
        <p>{{ $one_news->description }}</p>
        <footer class="footer" style="text-align: right;">{{ $one_news->created_at }}</footer>
    </div>
</div>
@endsection
