@extends('layouts.layout')
@section('title', $user->name.' | Editando...')
@section('content')
    <div class="container my-5 bg-white rounded border border-dark">
        <div class="mx-5 my-5">
            <h1>Editor de usuario</h1>
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('perfil.updateUser', $user) }}" method="post">
                @csrf @method('PATCH')
                <div class="form-group">
                    <label for="name">Nombre de usuario: </label><br>
                    <input
                        class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                        type="text"
                        name="name"
                        placeholder="{{$user->name}}"
                        id="name"
                        value="{{ old('name') }}"
                        >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="email">Correo: </label><br>
                    <input
                        class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                        type="email"
                        name="email"
                        placeholder="{{$user->email}}"
                        id="email"
                        value="{{ old('email') }}"
                        >
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0">Permiso:</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="permision" id="permision" value="admin" @if ($user->permision === 'admin') checked @endif>
                          <label class="form-check-label" for="admin">
                            Admin
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="permision" id="permision" value="editor" @if ($user->permision === 'editor') checked @endif>
                          <label class="form-check-label" for="editor">
                            Editor
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="permision" id="permision" value="user" @if ($user->permision === 'user') checked @endif>
                          <label class="form-check-label" for="user">
                            Usuario
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                <button type="submit" class="btn btn-primary bt-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
@endsection