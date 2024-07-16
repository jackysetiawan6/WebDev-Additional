<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('messages.title') }}</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1 class="text-center mb-5">{{ __('messages.create_account') }}</h1>
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('messages.name') }}</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>
            @error('name')
                <div class="alert alert-danger">{{ __('messages.' . $message) }}</div>
            @enderror
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('messages.email') }}</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            @error('email')
                <div class="alert alert-danger">{{ __('messages.' . $message) }}</div>
            @enderror
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('messages.password') }}</label>
                <input type="password" class="form-control" id="password" name="password"
                    value="{{ old('password') }}">
            </div>
            @error('password')
                <div class="alert alert-danger">{{ __('messages.' . $message) }}</div>
            @enderror
            <div class="mb-3">
                <label for="password_confirmation"
                    class="form-label">{{ __('messages.password_confirmation') }}</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    value="">
            </div>
            @error('password_confirmation')
                <div class="alert alert-danger">{{ __('messages.' . $message) }}</div>
            @enderror
            <button type="submit" class="btn btn-primary w-100">{{ __('messages.sign_up') }}</button>
            <div class="d-flex justify-content-center mt-5 gap-3">
                <a href="{{ route('change-language', 'en') }}" class="btn btn-primary">@lang('EN')</a>
                <a href="{{ route('change-language', 'ko') }}" class="btn btn-primary">@lang('KO')</a>
                <a href="{{ route('change-language', 'ar') }}" class="btn btn-primary">@lang('AR')</a>
                <a href="{{ route('change-language', 'ja') }}" class="btn btn-primary">@lang('JA')</a>
                <a href="{{ route('change-language', 'id') }}" class="btn btn-primary">@lang('ID')</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
