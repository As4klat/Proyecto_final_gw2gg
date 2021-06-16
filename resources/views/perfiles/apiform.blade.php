@extends('layouts.layout')
@section('title', 'Tu perfil | clave api')
@section('content')
<div class="container my-5 bg-white rounded border border-dark">
    <div class="row">
        <div col-12>

        </div>
    </div>
    <h1>Tu api key aqui</h1>

    @error('userapikey')
        <p>Error al introducir la api key. Comprueba que:</p>
        <ul>
            <li>La clave tiene el formato correcto.</li>
            <li>La has copiado desde tu cuenta de arenanet.</li>
            <li>Ya existe una igual.</li>
        </ul>
    @enderror

    <form method="POST" action="{{ route('apiform.save') }}">
        @csrf
        <label for="userapikey">Introduce tu Api key: </label>
        <input type="text" name="userapikey" placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxxxxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" id="userapikey">
        <button>Guardar</button>
    </form>
    <h2>Tus claves</h2>
    <ul>
        @forelse ($keys as $key)
            <li class="row mt-3">
                <div class="col-sm-8">
                    {{ $key['api_key'] }}
                </div>

                <form class="col-sm-3" action="{{ route('apiform.destroy', $key) }}" method="post">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @empty
            <li>No tienes aun claves registradas</li>
        @endforelse
    </ul>
    <h3>Instrucciones</h3>
    <ol>
        <li>Abre el panel de gestión de <a class="new-a" href="https://account.arena.net">claves de API de Guild Wars 2</a>.</li>
        <li>Haz clic en el botón de "nueva clave".</li>
        <li>Introduce un nombre y marca todas las casillas de permisos.</li>
        <li>Copia tu nueva clave de API. CTRL + C</li>
        <li>Pégalo en la caja de arriba. CTRL + V</li>
        <li>Haz clic en el botón de "Guardar".</li>
        <li>¡Diviertete!</li>
    </ol>

</div>
@endsection
