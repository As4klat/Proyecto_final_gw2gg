@extends('layouts.layout')
@section('title', 'Noticias')
@section('content')
    <div class="container mt-3">
        <h1>Esto son las noticias</h1>
        <p>Aqui se subira los eventos que hagamos, tendra tanto como una vista de cliente como de editor</p>

        <div>
            @forelse ($news as $new)
            <a class="nav-link" href="{{ route('news.show', $new) }}">
                <div class="mt-3">
                    <h4>{{ $new['title'] }}</h4>
                    <p>{{ $new['preview'] }}</p>
                </div>
            </a>
            @empty
            <p>No hay ninguna novedad</p>
            @endforelse
        </div>
    </div>
@endsection
