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
                <li class="nav-item"><a class="nav-link {{ setActive('actualizaciones.index') }}"  href="{{route('actualizaciones.index')}}">Actualizaciones</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('solicitud') }}"  href="{{route('solicitud')}}">Solicitud</a></li>
            </ul>
        </div>

        <a class="navbar-brand" href="{{route('about')}}">
            <img class="img-fluid" src="./images/logo-clan.jpeg" width="60" height="60" alt="fuerzas_del_alba.jpg">
        </a>

    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
