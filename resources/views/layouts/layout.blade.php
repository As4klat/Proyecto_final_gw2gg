<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        .active a{
            text-decoration: none;
            color: red;
        }
        nav a {
            text-decoration: none;
        }
    </style>
    </head>
<body>
    @include('partials.perfil')
    @include('partials/nav')

    @include('partials.session-status')

    @yield('content')
</body>
</html>
