@extends('layouts.layout')
@section('title', 'news')
@section('content')
    <div class="container my-5 bg-white rounded border border-dark">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil" aria-selected="true">Tu perfil</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="perfil-tab" data-toggle="tab" href="#userApi" role="tab" aria-controls="userApi" aria-selected="false">Cuenta Api</a>
            </li>
          @if (auth()->user()->permision === 'editor' || auth()->user()->permision === 'admin')
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="false">Mis noticias</a>
            </li>
          @endif
          @if (auth()->user()->permision === 'admin')
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="usercontrol-tab" data-toggle="tab" href="#usercontrol" role="tab" aria-controls="usercontrol" aria-selected="false">Gestion de usuarios</a>
            </li>
          @endif
          </ul>
          
          <div class="tab-content">
            <div class="tab-pane active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
              @include('perfiles.profile-templates.userProfile')
            </div>
            <div class="tab-pane" id="userApi" role="tabpanel" aria-labelledby="news-tab">
              @include('perfiles.profile-templates.userApi',[
                'acount' => $acount,
              ])
          </div>
            <div class="tab-pane" id="news" role="tabpanel" aria-labelledby="news-tab">
                @include('perfiles.profile-templates.userNew',[
                    'news' => $news,
                    'n' => 1
                ])
            </div>
            <div class="tab-pane" id="usercontrol" role="tabpanel" aria-labelledby="usercontrol-tab">
                @include('perfiles.profile-templates.userAdmin',[
                'solicitudes' => $solicitudes,
                'users' => $users,
                'n' => 1,
                'n1' => 1
            ])</div>
          </div>

          <script>
            $(function () {
              $('#myTab li:last-child a').tab('show')
            })
          </script>
        @if (auth()->user()->permision === 'admin')

        @endif
    </div>
@endsection
