<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}" defer></script>
    </head>
<body class="@if (
                Request::is('login') ||
                Request::is('register') ||
                Request::is('password/reset')) img-backlogre @else img-back-3 @endif">

    <div id="app" class="d-flex flex-column justify-content-between">
        <header>
                @include('partials.login')
                @include('partials/nav')
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-white text-center text-black-50 py-3 shadow ">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>
</body>
</html>
