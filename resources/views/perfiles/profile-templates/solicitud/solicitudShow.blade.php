@extends('layouts.layout')
@section('title', 'Nuestro clan')
@section('content')
    <div class="container my-5 bg-white rounded border border-dark">
        <div class="row">
            <div class="col">
                <h2 class="mt-4"><strong>Usuario:</strong> {{$solicitud->nombre_cuenta}}</h2>
                <h2 class="mt-4">Clases disponibles</h2>
                <p class="rounded border border-dark">{{$solicitud->clases}}</p>
                <h2 class="mt-4">Motivo para entrar</h2>
                <p class="rounded border border-dark">{{$solicitud->motivo}}</p>
            </div>
        </div>
    </div>
@endsection