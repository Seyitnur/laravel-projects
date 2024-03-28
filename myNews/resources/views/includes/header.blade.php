@section('header')
<nav class="navbar navbar-expand navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <h2>News</h2>
        </li>
        <li class="nav-item">
            <a href="{{ route('News') }}" class="nav-link">See News</a>
        </li>
        @if (Auth::check())
        <li class="nav-item position-absolute end-0">
            <h4><a href="{{ route('account') }}" class="nav-link">{{ Auth::user()->name }}</a></h4>
        </li>
        @else
        <li class="nav-item position-absolute end-0">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </li>
        @endif
    </ul>
</nav>
