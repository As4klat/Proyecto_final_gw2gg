@extends('layouts.layout')
@section('title', $actualizacion->title.' | Actualizacciones')
@section('content')
    <div class="container mt-5">
        {!! $actualizacion->body !!}
    </div>
@endsection
