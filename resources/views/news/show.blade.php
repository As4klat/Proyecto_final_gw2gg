@extends('layouts.layout')
@section('title', $new->title.' | noticias')
@section('content')
    <div class="container my-5 bg-white rounded border border-dark">
        <h1>{{ $new->title }}</h1>
        <p>{!! $new->body !!}</p>
    </div>
@endsection
