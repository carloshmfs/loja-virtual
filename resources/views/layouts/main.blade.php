<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Loja Virtual | @yield('title')</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
</head>
<body>
<!-- Navigation-->
@include('layouts.header')

<!-- Content -->
@yield('content')

<!-- Footer-->
@include('layouts.footer')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
