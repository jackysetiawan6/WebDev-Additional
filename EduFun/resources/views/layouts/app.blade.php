<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EduFun</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        *::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="vh-100 vw-100">
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
</body>

</html>
