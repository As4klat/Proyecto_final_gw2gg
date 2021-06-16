<div class="my-4">
    @if (@empty($acount))
        <p>Por favor compruebe su clave Api que tenga los permisos necesarios</p>
    @else
        <div class="row">
            <div class="col">
                <h1 class="display-3">{{$acount->name}}</h1>
                <small>{{$acount->age}}</small>
                <p>{{$acount->world}}</p>
            </div>
            <div class="col mt-3">
                @if (@empty($acount->guild_leader))
                <p>No eres lider de ningun clan.</p>
                @else
                <p>{{$acount->guild_leader}}</p>
                @endif
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
