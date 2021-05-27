<h1>Usuarios</h1>
<div class="table-responsive-lg">
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
                <tr class="table-light">
                    <th scope="row">{{ $n++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->permision }}</td>
                    <td>
                        <div class="row ">
                            <a href="#" class="btn btn-outline-success col-sm-3 mr-2">Editar</a>
                            <form action="{{ route('perfil.destroy', $user) }}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger col">Eliminar</button>
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
