<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>
            &copy; Copyritht {{ date('Y') }}
            <a href="{{ route('about') }}">About Us</a>
        </p>
    </footer>
</body>
</html>