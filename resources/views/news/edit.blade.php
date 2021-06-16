@extends('layouts.layout')
@section('title', 'Editando | '.$new->title)
@section('content')
<div class="container my-5 bg-white rounded border border-dark">
    <h1>Actualizar noticia</h1>
    @include('news.form-template.form-news',[
        'btnText' => 'Actualizar',
        'route' => route('news.update', $new)
    ])
</div>
@endsection
