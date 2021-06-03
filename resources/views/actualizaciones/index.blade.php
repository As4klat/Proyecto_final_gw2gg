@extends('layouts.layout')
@section('title', 'Actualizaciones')
@section('content')
    <div class="container">
        <h1 class="display-4">Parches del juego</h1>
        <div>
            <ul class="list-group">
                @forelse ($actualizaciones as $actualizacion)
                <li class="list-group-item mb-3 shadow-sm">
                    <a class="nav-link no-a" href="{{ route('actualizaciones.show', $actualizacion) }}">
                        <div class="row">
                            <div class="col">
                                <h2>{{ $actualizacion['title'] }}</h2>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <small class="text-muted">{{ $actualizacion['meta'] }}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $actualizacion['preview'] }}
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
