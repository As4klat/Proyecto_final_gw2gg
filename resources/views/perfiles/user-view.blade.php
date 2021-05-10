@extends('layouts.layout')
@section('title', 'news')
@section('content')
    <h1>Vista del usuario</h1>

    @if (auth()->user()->permision === 'editor' || auth()->user()->permision === 'admin' )
        <a href="{{ route('news.create') }}">Crear post</a>
    @endif
@endsection
