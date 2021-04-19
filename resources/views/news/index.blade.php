@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <h1>Esto son las noticias</h1>
    <p>Aqui se subira los eventos que hagamos, tendra tanto como una vista de cliente como de editor</p>

    <div>
        @forelse ($news as $new)
        <div style="border: grey dotted" onclick="alert('hola')">
            <h4>{{ $new['title'] }}</h4>
            <p>{{ $new['preview'] }}</p>
        </div>
        <br>
        @empty
        <p>No hay ninguna novedad</p>
        @endforelse
    </div>

    @if (auth()->user()->permision === 'editor' || 'admin' )
        <a href="{{ route('news.create') }}">Crear post</a>
    @endif

@endsection
