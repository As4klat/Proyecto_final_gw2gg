@extends('layouts.layout')
@section('title', 'Crear noticia')
@section('content')
<div class="container mt-3">
    <h1>Crear noticia</h1>
    @include('news.form-template.form-news',[
        'btnText' => 'Crear',
        'route' => route('news.save', $new)
    ])
</div>
@endsection
