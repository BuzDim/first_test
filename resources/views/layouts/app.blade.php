<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

</head>
<body class="antialiased">
    @include("components.navbar")

    @yield("content")

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Выйти</button>
    </form>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
