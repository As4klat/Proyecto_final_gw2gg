@extends('layouts.layout')
@section('title', 'Home')
@section('content')
    <h1>Esto son las noticias</h1>
    <p>Aqui se subira los eventos que hagamos, tendra tanto como una vista de cliente como de editor</p>

    <div>
        @forelse ($news as $new)
        <div onclick="alert('hola')">
            <h3>{{ $new['title'] }}</h3>
            <p>{{ $new['preview'] }}</p>
        </div>
        @empty
        <p>No hay ninguna novedad</p>
        @endforelse
    </div>


@endsection
