@extends('layouts.layout')
@section('title', 'Nuestro clan')
@section('content')
<div class="container mt-3">
    <h1>Tus noticias</h1>
    <ul>
        @forelse ($news as $new)
            <li style="list-style: none">
                <div class="row mt-3 ">
                    {{ $new->title }}
                    <div class="row ml-5">
                        <a href="{{ route('news.edit', $new) }}" class="btn btn-success ml-3">Editar</a>
                        <form action="{{ route('news.destroy', $new) }}" method="post">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger ml-3">Eliminar</button>
                        </form>
                    </div>
                </div>
            </li>
        @empty
            <li>No tienes noticias</li>
        @endforelse
    </ul>

    @if (auth()->user()->permision === 'editor' || auth()->user()->permision === 'admin' )
    <a href="{{ route('news.create') }}" class="btn btn-primary ml-3">Crear post</a>
    @endif
</div>
@endsection
