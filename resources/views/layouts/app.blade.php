<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.navbar');
    <div class ="controller">

        <div class="row">
        <div class="col-md-2">
        @include('layouts.sadbar');
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>

</body>
</html>