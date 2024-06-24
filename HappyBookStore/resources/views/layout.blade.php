<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Happy Book Store</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <style>
        .left-side,
        .right-side {
            width: 18%;
        }

        .body-container {
            width: 60%;
            max-width: none;
        }
    </style>
</head>

<body>
    <section class="layout vw-100 vh-100 d-flex flex-column justify-content-between">
        @include('header')
        <div class="container-fluid w-100 h-100 p-3 d-flex flex-row gap-4 justify-content-evenly">
            <div class="left-side"></div>
            <div class="body-container">
                @yield('name')
                @yield('content')
            </div>
            <div class="right-side">
                <p class="bg-warning p-2 w-100 mb-4">Category</p>
                <ul class="list-unstyled ms-2 d-flex flex-column gap-2">
                    @foreach ($categories as $category)
                        <li><a class="nav-link text-primary"
                                href="{{ route('category', ['cat_id' => $category->id]) }}">{{ $category->category }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="footer">
            <p class="bg-primary w-100 text-white text-center fw-light py-1 mb-0">@ Happy Book Store 2021</p>
        </div>
    </section>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('popper.min.js') }}"></script>
</body>

</html>
