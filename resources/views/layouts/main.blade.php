<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>{{ $title }}</title>
</head>

<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
</body>

</html>
