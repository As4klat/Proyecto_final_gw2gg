@extends('layouts.layout')
@section('title', 'Noticias')
@section('content')
    <h1>Esto son las noticias</h1>
    <p>Aqui se subira los eventos que hagamos, tendra tanto como una vista de cliente como de editor</p>

    <div>
        @forelse ($news as $new)
        <a href="{{ route('news.show', $new) }}">
            <div style="border: grey dotted">
                <h4>{{ $new['title'] }}</h4>
                <p>{{ $new['preview'] }}</p>
            </div>
        </a>
        @empty
        <p>No hay ninguna novedad</p>
        @endforelse
    </div>
@endsection
