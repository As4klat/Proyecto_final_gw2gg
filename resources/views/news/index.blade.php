@extends('layouts.layout')
@section('title', 'Noticias')
@section('content')
    <div class="container">
        <h1 class="display-4 text-center my-5">¡Eventos!</h1>
        <div>
            <ul class="list-group">
                @forelse ($news as $new)
                <li class="list-group-item mb-3 shadow-sm mx-5 my-3 img-back-2">
                    <a class="nav-link no-a" href="{{ route('news.show', $new) }}">
                        <div class="row">
                            <div class="col">
                                <h2>{{ $new['title'] }}</h2>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <small class="text-muted">Publicado el {{ $new->created_at->format('d-m-Y') }}</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $new['preview'] }}
                            </div>
                        </div>
                    </a>
                </li>
                @empty
                <li class="list-group-item mb-3 shadow-sm">No hay ninguna novedad</li>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $news->links() }}
                </div>
            </ul>
        </div>
    </div>
@endsection
