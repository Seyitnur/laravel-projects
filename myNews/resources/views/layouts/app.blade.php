<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    @include('includes.header')

    <div class="container-fluid">
        @include('includes.messages')
        @yield('content')
    </div>

    @include('includes.footer')
</body>
</html>
