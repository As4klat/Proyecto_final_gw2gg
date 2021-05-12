@extends('layouts.layout')
@section('title', 'usuarios | administración')
@section('content')
<div class="container mt-3">
    <h1>Usuarios</h1>
    <div class="table-responsive-lg">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo electronico</th>
                    <th scope="col" colspan="2">Permiso</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr class="table-light">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->permision }}</td>
                        <td>
                            <a href="#" class="btn btn-outline-success ml-3">Editar</a>
                            <form action="#" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger ml-3">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>No existen usuarios</tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
