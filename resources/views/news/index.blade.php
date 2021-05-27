@extends('layouts.layout')
@section('title', 'Noticias')
@section('content')
    <div class="container">
        <h1 class="display-4">Esto son las noticias</h1>
        <p>Aqui se subira los eventos que hagamos, tendra tanto como una vista de cliente como de editor</p>

        <div>
            <ul class="list-group">
                @forelse ($news as $new)
                <li class="list-group-item mb-3 shadow-sm">
                    <a class="nav-link a-new" href="{{ route('news.show', $new) }}">
                        <div class="row">
                            <div class="col">
                                <h2>{{ $new['title'] }}</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                {{ $new['preview'] }}
                            </div>
                            <div class="col">
                                {{ $new->created_at->format('d/m/Y') }}
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
