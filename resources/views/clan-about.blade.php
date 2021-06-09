@extends('layouts.layout')
@section('title', 'Nuestro clan')
@section('content')
    <div class="img-back-about py-5">
        <div class="container py-5 bg-transparente-about rounded border border-dark">
            <figure>
                <img class="img-fluid rounded mx-auto d-block" src="./images/logo-clan.jpeg" width="250" height="250" alt="fuerzas_del_alba.jpg">
            </figure>
            <h1 class="display-4 my-5 text-center">Fuerza Del Alba [FDA]</h1>
            <p class="text-justify">
                Creado por un grupo de amigos con el fin de obtener un lugar donde se hagan todo tipo de actividades aptas para todo aquel 
                que quiera venir y donde el buen rollo y el respecto sea fundamental. 
                Nos encontramos en el servidor Bahia de Baruch [ES].
            </p>
            <hr>
            <p class="text-justify">
                En Fuerza del Alba nos consideramos un clan acogedor con muy buen rollo.
                Existen normas como en todos los clanes, sin embargo no nos gusta estar detrás de la gente recordándolas, 
                son normas muy claras que se saben antes de acceder al clan y deben acatarse.
                Disponemos de varios programas de voz, actualmente utilizamos el Discord.
    
                Nuestro discord: <a href="https://discord.gg/zkxuTyeMkd">https://discord.gg/zkxuTyeMkd</a>
            </p>
            <hr>
            <h2 class="my-4">¿Que ofrecemos?</h2>
            <div class="accordion mx-4" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Actividades
                      </button>
                    </h2>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        Haremos actividades diarias y lo que surga, queremos que el clan esté activo lo maximo 
                        posibles y asegurar que siempre tengais algo que hacer con nosotros ;)
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Mazmorras
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        No buscamos lo tryhard así que sí, haremos runs de mazmorras para quien se quiera divertir un poco cooperando y charlando.
                        Entre vosotros tambien se puede organizar perfectamente estas runs así que no dudeis en buscar grupo, siempre habra quien quiera participar.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Raid PvE
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      Tambien montaremos diferentes grupos de trining para los jugadores menos experimentado en este
                      contenido pero tambien montaremos grupos para los jugadores más expertos para tirar alas y ganar ese jugoso oro.
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          Discord
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        Para todas estas actividades usaremos discord, el enlace es el siguiente: <a href="https://discord.gg/zkxuTyeMkd">https://discord.gg/zkxuTyeMkd</a>
                      </div>
                    </div>
                  </div>
            </div>
            <hr>
            <p class="text-center">
              Esperamos que disfrute de esta comunidad y nos vemos en tyria. <br>
              Para entrar mande una solicitud <a href="{{route('solicitud')}}">aquí</a>
            </p>
        </div>
    </div>
@endsection
