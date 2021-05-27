<nav class="navbar navbar-dark navbar-expand-lg bg-dark shadow-sm">
    <div class="container">
        <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{route('about')}}">Nuesto clan</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('news.index') }}"  href="{{route('news.index')}}">Noticias</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('actualizaciones') }}"  href="{{route('actualizaciones')}}">Actualizaciones</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('solicitud') }}"  href="{{route('solicitud')}}">Solicitud</a></li>
            </ul>
        </div>

        <a class="navbar-brand" href="{{route('about')}}">
            <img src="/docs/4.6/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
        </a>

    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
