@extends('layouts.layout')
@section('title', 'Solicitud')
@section('content')
    <h1>Solicitud</h1>

    <p>Si estás interesado/a en entrar a nuestro clan, por favor escribe abajo tu nombre de cuenta en el Gw2 para que te podamos invitar al clan.</p>
    <p>Recuerde las normas:</p>
    <ul>
        <li>Respeto y educación entre todos.</li>
        <li>Uso del Discord si se requiere.</li>
        <li>No se tolerarán comentarios de carácter sexista, racista o discriminatorios de ninguna clase.</li>
        <li>No se tolerará cualquier tipo de acoso, ni el acoso reiterado mediante preguntas de carácter impertinente o no relacionados con el juego.</li>
        <li>No se tolerará el uso inadecuado del Facebook, teléfonos o Whatsapp para importunar a los miembros.</li>
        <li>Los temas de política se harán en un canal privado con aquellas personas que sólo quieran hablar del tema siempre y cuando sea de forma pacífica y sin faltar al respeto.</li>
        <li>Está prohibido el envío reiterado de mensajes en el chat de clan sobre cuestiones ajenas al juego, así como su uso para ventilar cuestiones que deben ser tratadas por un canal privado ya sea susurro o grupo.</li>
    </ul>
    <form action="{{ route('solicitud') }}" method="post">
    @csrf
        <label for="cuenta">Nombre de cuenta (nombredecuenta.1234): </label><br>
        <input type="text" name="cuenta" id="cuenta"><br>
        <label for="clases">Clases que tienes bien equipadas o dominas: </label><br>
        <textarea name="clases" id="clases" cols="30" rows="10"></textarea><br>
        <label for="motivo">¿Que es lo que buscas con nosotros o que esperas encontrar?</label><br><br>
        <textarea name="motivo" id="motivo" cols="30" rows="10"></textarea><br>
        <button>Enviar</button>
    </form>
@endsection
