<div class="img-back-1">
    <div class="container py-4">
        <div class="row justify-content-end">
            <div class="col-6 col-sm-2 col-md-3 col-lg-4 ml-auto">
                @guest
                <a class="new-a mr-2" href="{{ route('login') }}">Iniciar sesion</a> | <a class="new-a ml-2" href="{{ route('register') }}">Registrarse</a>
            @else
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">
                    {{ auth()->user()->name }} bienvenido!
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('perfil') }}">Mi perfil</a>
                      <a class="dropdown-item" href="{{ route('apiform.index') }}">Clave Api</a>
                      <a class="dropdown-item" href="#" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                      >Cerrar sesión</a>
                    </div>
                </div>
            @endguest
            </div>
        </div>
    </div>
</div>

