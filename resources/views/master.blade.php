<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome to alaedin dictionary</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/bootstrap-them.min.css') !!}">

    <!-- Optional theme -->

    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">

    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <!-- Latest compiled and minified JavaScript -->
</head>
<body>
@include('partial.nav')
@yield('content')
@include('partial.footer')
</body>
</html>