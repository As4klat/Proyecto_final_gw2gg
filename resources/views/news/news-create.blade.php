@extends('layouts.layout')
@section('title', 'Home')
@section('content')

    <h1>Nuevo Post</h1>
    <p>Crear contenido y noticias para que todos los del clan se enteren</p>

    <form action="{{ route('news.save') }}" method="post">
    @csrf

        <label for="title">Titulo:</label><br>
        <input type="text" name="title" id="title"><br>

        @error('title')
            <small style="color: red">* Obligatorio rellenar y no superar los 40 caracteres</small><br>
        @enderror

        <label for="preview">Preview del evento:</label><br>
        <textarea name="preview" id="preview" cols="30" rows="10"></textarea><br>

        @error('preview')
            <small style="color: red">* Obligatorio rellenar y no superar los 249 caracteres</small><br>
        @enderror

        <label for="body">Cuerpo:</label><br>
        <textarea name="body" id="body" cols="30" rows="10"></textarea><br>

        @error('body')
            <small style="color: red">* Obligatorio rellenar</small><br>
        @enderror

        <button>Crear</button>
    </form>

@endsection
