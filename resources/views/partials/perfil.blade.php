@guest
    <p><a href="{{ route('login') }}">Iniciar sesion</a> | <a href="{{ route('register') }}">Registrarse</a></p>
    @else
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
        {{ auth()->user()->name }} bienvenido!
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ route('perfil') }}">Mi perfil</a>
          <a class="dropdown-item" href="{{ route('apiform') }}">Clave Api</a>
          <a class="dropdown-item" href="#" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"
          >Cerrar sesión</a>
        </div>
    </div>
@endguest


