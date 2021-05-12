@extends('layouts.layout')
@section('title', $new->title.' | noticias')
@section('content')
    <div class="container mt-3">
        <h1>{{ $new->title }}</h1>
        <p>{!! $new->body !!}</p>
    </div>
@endsection
