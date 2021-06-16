<div class="my-4 mx-5">
    <h1>Tus noticias</h1>
    @if ($news->isEmpty())
       <p>No hay noticias aún, empecemos a crear!</p>
    @else
    <div class="table-responsive-lg table-striped">
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
                    <tr>
                        <th scope="row">{{ $n++ }}</th>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->created_at->format('d-m-Y  h:m') }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('news.edit', $new) }}" class="btn btn-outline-success ml-3">Editar</a>
                                <form action="{{ route('news.destroy', $new) }}" method="post">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger ml-3">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @endif
    <a href="{{ route('news.create') }}" class="btn btn-primary ml-3">Crear</a>
</div>