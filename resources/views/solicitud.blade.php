@extends('layouts.layout')
@section('title', 'Solicitud')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col col-sm-10 col-lg-10 mx-auto">
                <h1 class="display-4">Solicitud</h1>
                <p>Si estás interesado/a en entrar a nuestro clan, por favor escribe abajo tu nombre de cuenta en el Gw2 para que te podamos invitar al clan.</p>
                <p>Recuerde las normas:</p>
                <ul>
                    <li class="my-2">Respeto y educación entre todos.</li>
                    <li class="my-2">Uso del Discord si se requiere.</li>
                    <li class="my-2">No se tolerarán comentarios de carácter sexista, racista o discriminatorios de ninguna clase.</li>
                    <li class="my-2">No se tolerará cualquier tipo de acoso, ni el acoso reiterado mediante preguntas de carácter impertinente o no relacionados con el juego.</li>
                    <li class="my-2">No se tolerará el uso inadecuado del Facebook, teléfonos o Whatsapp para importunar a los miembros.</li>
                    <li class="my-2">Los temas de política se harán en un canal privado con aquellas personas que sólo quieran hablar del tema siempre y cuando sea de forma pacífica y sin faltar al respeto.</li>
                    <li class="my-2">Está prohibido el envío reiterado de mensajes en el chat de clan sobre cuestiones ajenas al juego, así como su uso para ventilar cuestiones que deben ser tratadas por un canal privado ya sea susurro o grupo.</li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-10 col-lg-6 mr-auto">
                <img src="images/tools/pattern6.jpg" class="img-fluid float-left" alt="">
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('solicitud') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label for="cuenta">Nombre de cuenta (nombredecuenta.1234): </label><br>
                        <input
                            class="form-control bg-light shadow-sm @error('cuenta') is-invalid @else border-0 @enderror"
                            type="text"
                            name="cuenta"
                            placeholder="Nombre..."
                            id="cuenta"
                            value="{{ old('cuenta') }}"
                            >
                            @error('cuenta')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="clases">Clases que tienes bien equipadas o dominas: </label><br>
                        <textarea
                            class="form-control bg-light shadow-sm @error('clases') is-invalid @else border-0 @enderror"
                            name="clases"
                            placeholder="Clases que manejas..."
                            id="clases"
                            >{{ old('clases') }}</textarea>
                            @error('clases')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="motivo">¿Que es lo que buscas con nosotros o que esperas encontrar?</label><br><br>
                        <textarea
                            class="form-control bg-light shadow-sm @error('motivo') is-invalid @else border-0 @enderror"
                            name="motivo"
                            placeholder="¿Porque te gustaría unirte?..."
                            id="motivo"
                            >{{ old('motivo') }}</textarea>
                            @error('motivo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <button class="btn btn-primary bt-lg btn-block">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
