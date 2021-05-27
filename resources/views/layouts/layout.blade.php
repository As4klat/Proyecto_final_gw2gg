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
<body class="@if (Request::is('login') || Request::is('register')) img-backlogre @endif">

    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
                @include('partials.login')
                @include('partials/nav')
        </header>

        <main>
            @yield('content')

            <div id="load" class="d-flex justify-content-center aling-items-center" style="width: 3rem; height: 3rem;" >
                <div class="spinner-border" role="status">
                  <span class="visually-hidden"></span>
                </div>
            </div>
        </main>

        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }}
        </footer>
    </div>

    <script>
        window.onload = function(){
            var load = document.getElementById('load');
            load.style.visibility = 'hidden';
            load.style.opacity = '0';
        }
    </script>
</body>
</html>
