@extends('layouts.layout')
@section('title', 'Noticias')
@section('content')


    <div class="container mt-3">
        <div class="row mt-5">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-header"><h1>Nueva notica</h1></div>
                    <div class="panel-body">
                        <form action="{{ route('news.save') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titulo:</label><br>
                                <input type="text" name="title" id="title">
                                @error('title')
                                    <small style="color: red">* Obligatorio rellenar y no superar los 40 caracteres</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="preview">Preview del evento:</label>
                                <textarea class="form-control" name="preview" id="preview" cols="112" rows="5"></textarea>
                                @error('preview')
                                    <small style="color: red">* Obligatorio rellenar y no superar los 249 caracteres</small><br>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="body">Cuerpo de la noticia:</label>
                                <textarea class="ckeditor form-control" name="body" id="body" cols="30" rows="10"></textarea><br>
                                @error('body')
                                    <small style="color: red">* Obligatorio rellenar</small><br>
                                @enderror
                            </div>
                            <button class="btn btn-primary">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
