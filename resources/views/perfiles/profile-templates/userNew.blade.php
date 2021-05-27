<h1>Tus noticias</h1>
<div class="table-responsive-lg">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col" colspan="2">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($news as $new)
                <tr class="table-light">
                    <th scope="row">{{ $n++ }}</th>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->created_at->format('d-m-Y  h:m') }}</td>
                    <td>
                        <div class="row ">
                            <a href="{{ route('news.edit', $new) }}" class="btn btn-outline-success ml-3">Editar</a>
                            <form action="{{ route('news.destroy', $new) }}" method="post">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger ml-3">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>Empecemos a crear noticias :D</tr>
            @endforelse
        </tbody>
    </table>
</div>
<a href="{{ route('news.create') }}" class="btn btn-primary ml-3">Crear</a>

