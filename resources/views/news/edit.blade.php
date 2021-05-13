@extends('layouts.layout')
@section('title', 'Editando | '.$new->title)
@section('content')
<div class="container mt-3">
    <h1>Actualizar noticia</h1>
    @include('news.form-template.form-news',[
        'btnText' => 'Actualizar',
        'route' => route('news.update', $new)
    ])
</div>
@endsection
