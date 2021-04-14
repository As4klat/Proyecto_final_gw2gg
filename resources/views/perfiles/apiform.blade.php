@extends('layouts.layout')
@section('title', 'Tu perfil | clave api')
@section('content')
    <h1>Tu api key aqui</h1>
@error('userapikey')
    <p>La clave tal tal</p>
@enderror
    <form method="POST" action="{{ route('apiform') }}">
        @csrf
        <label for="userapikey">Introduce tu Api key: </label>
        <input type="text" name="userapikey" placeholder="xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxxxxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx" id="userapikey">
        <button>Guardar</button>
    </form>

    <h2>Tus claves</h2>
    <ul>
        @forelse ($key as $keyItem)
            <li>{{ $keyItem['api_key'] }} <button>borrar</button></li>
        @empty
            <li>No tienes aun claves registradas</li>
        @endforelse
    </ul>

@endsection
