<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</script>
</head>
<body>
    @include('layouts.navbar');
    <div class ="container-fluid">

        <div class="row mt-2">
        <div class="col-md-3">
        @include('layouts.sadbar');
        </div>
        <div class="col-md-9">
             <!-- Breadcrumb -->
        @include('layouts.breadcrumb');
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>