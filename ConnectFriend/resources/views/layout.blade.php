<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ConnectFriend</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <style>
        .form-control::placeholder {
            color: #7e7e7e;
        }

        .form-control:focus {
            box-shadow: none
        }
    </style>
</head>

<body>
    <div class="container d-flex vw-100 vh-100 p-0 m-0 bg-black" style="max-width: none;">
        @include('header')
        <div class="container-fluid h-100 m-0 p-5" style="max-width: none; width: 85%;">
            <div class="container-top d-flex w-100 justify-content-between">
                <p class="text-white fs-4 fw-medium m-0">Home</p>
                <form class="form-inline my-2 my-lg-0 w-25">
                    <input class="form-control rounded-0 bg-transparent border-0 border-bottom text-white"
                        type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('popper.min.js') }}"></script>
</body>

</html>
