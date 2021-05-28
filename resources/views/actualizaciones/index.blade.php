@extends('layouts.layout')
@section('title', 'Actualizaciones')
@section('content')
    <div class="container">
        <h1 class="display-4">Actualizaciones/parches del juego</h1>
        <p>Se colgara aqui los parches de actualizacion del juego</p>

        <div>
            <ul class="list-group">
                @forelse ($actualizaciones as $actualizacion)
                <li class="list-group-item mb-3 shadow-sm">
                    <a class="nav-link a-new" href="{{ route('actualizaciones.show', $actualizacion) }}">
                        <div class="row">
                            <div class="col">
                                <h2>{{ $actualizacion['title'] }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $actualizacion['preview'] }}
                            </div>
                            <div class="col">
                                {{ $actualizacion->created_at->format('d/m/Y') }}
                            </div>
                        </div>
                    </a>
                </li>
                @empty
                <li class="list-group-item mb-3 shadow-sm">No hay ninguna novedad</li>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $actualizaciones->links() }}
                </div>
            </ul>

        </div>
    </div>
@endsection
