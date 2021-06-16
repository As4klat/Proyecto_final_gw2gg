<div class="my-4 mx-5">
    @if ($acount === null)
        <p>Por favor compruebe su clave Api que tenga los permisos necesarios</p>
    @else
        <div class="row">
            <h1 class="display-3">{{$acount->name}}</h1>
        </div>
        <div class="row">
            <div class="col">
                <p>Tiempo de juego: <small>{{$acount->age}}</small></p>
                <p>Servidor de origen: {{$acount->world}}</p>
            </div>
            <div class="col">
                <p>Nivel de fractales: {{$acount->fractal_level}}</p>
                <p>Nivel de McM: {{$acount->wvw_rank}}</p>
            </div> 
        </div>
    
        <div class="mt-4 align-items-center">
            <h2 class="text-center my-4 display-4">Clanes a los que perteneces</h2>
            @foreach ($acount->guilds as $guild)
            <p class="text-center">{{$guild->name}} [{{$guild->tag}}]</p> <img class="img-fluid rounded mx-auto d-block" src="https://emblem.werdes.net/emblem/{{$guild->id}}" width="100" height="100" alt="{{$guild->name}}.png"> <br>
            @endforeach
        </div>
    @endif
    
</div>
