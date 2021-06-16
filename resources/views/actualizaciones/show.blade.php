@extends('layouts.layout')
@section('title', $actualizacion->title.' | Actualizacciones')
@section('content')
    <div class="container my-5 bg-white rounded border border-dark">
        {!! $actualizacion->body !!}
    </div>
@endsection
