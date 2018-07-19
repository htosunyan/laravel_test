<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css')  }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body class="body-color">
@include ('includes.navbar')
<div class="container">

    @if (session()->has('success'))
        <div class="alert alert-success">
            <p class="mb-0">{{ session()->get('success') }}</p>
        </div>
    @elseif(session()->has('danger'))
        <div class="alert alert-danger">
            <p class="mb-0">{{ session()->get('danger') }}</p>
        </div>
    @endif

    @yield('content')

    <footer class="footer mt-5">
        <p>© Company 2017</p>
    </footer>
</div>
    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
