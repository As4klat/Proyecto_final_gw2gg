<h1>admin</h1>
<a href="{{ route('userNews.index')}}">Tus noticias</a>
@if (auth()->user()->permision === 'admin')
<a href="{{ route('userAdmin.index') }}">Gestion de usuarios</a>
@endif

