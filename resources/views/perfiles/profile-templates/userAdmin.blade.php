<div class="my-4 mx-5">
    <h1>Administración</h1>
    <div class="accordion" id="accordionExample">
        
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Gestión de usuarios
                    </button>
                </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    @if ($users->isEmpty())
                        No hay usuarios
                    @else
                    <div class="table-responsive-lg table-striped">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo electronico</th>
                                    <th scope="col" colspan="2">Permiso</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $n++ }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->permision }}</td>
                                        <td>
                                            <div class="row">
                                                <a href="{{ route('perfil.editUser', $user) }}" class="btn btn-outline-success mx-2">Editar</a>
                                                <form action="{{ route('perfil.destroy', $user) }}" method="post">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>No existen usuarios</tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Solicitudes al clan
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    @if ($solicitudes->isEmpty())
                    <p>No hay solicitudes</p>
                    @else
                    <div class="table-responsive-lg table-striped">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col" colspan="2">Aceptado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <th scope="row">{{ $n1++ }}</th>
                                        <td><a class="no-a" href="{{ route('perfil.solicitudShow', $solicitud) }}">{{ $solicitud->nombre_cuenta }}</a></td>
                                        <td><div class="cuadrado @if( $solicitud->aceptado === 1 ) succes @endif rounded border border-dark"></div></td>
                                        <td>
                                            <div class="row">
                                                <form action="{{ route('perfil.solicitudSucces', $solicitud) }}" method="post">
                                                    @csrf @method('PATCH')
                                                    <button class="btn btn-outline-success mx-2">Aceptar</button>
                                                </form>
                                                <form action="{{ route('perfil.solicitudDestroy', $solicitud) }}" method="post">
                                                    @csrf @method('DELETE')
                                                    <button class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>