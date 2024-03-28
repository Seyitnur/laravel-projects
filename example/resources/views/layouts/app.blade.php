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
        <div class="row">
            <div class="col-2">
                @include('includes.aside')
            </div>
            <div class="col-10">
                @include('includes.messages')
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
