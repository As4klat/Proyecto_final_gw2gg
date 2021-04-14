<nav>
    <ul>
        <li class="{{ setActive('about') }}"><a href="{{route('about')}}">Nuesto clan</a></li>
        <li class="{{ setActive('news.index') }}"><a href="{{route('news.index')}}">Noticias</a></li>
        <li class="{{ setActive('actualizaciones') }}"><a href="{{route('actualizaciones')}}">Actualizaciones</a></li>
        <li class="{{ setActive('solicitud') }}"><a href="{{route('solicitud')}}">Solicitud</a></li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
