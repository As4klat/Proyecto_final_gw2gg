<div class="m-4">
    <h4 class="display-4 text-center">Administración de cuenta</h4>
    <div class="container">
        <div class="row">
            <div class="col border">
                <div class="m-3">
                    <form class="py-3" action="{{route('perfil.changeEmail')}}" method="post">
                        @csrf @method('PATCH')
                        <legend class="my-2">Cambiar email</legend>
                        <div class="input-group my-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input
                            type="email"
                            class="input-control bg-light shadow-sm @error('cuenta') is-invalid @else border-0 @enderror"
                            id="emailchange"
                            name="emailchange"
                            value="{{ old('emailchange') }}"
                            placeholder="{{auth()->user()->email}}"
                            aria-describedby="basic-addon1">
                          </div>
                        @error('emailchange')
                            <small style="color: red">* {{ $message }}</small>
                        @enderror
                        <button class="btn btn-primary bt-md">Actualizar</button>
                    </form>
                    <div class="row">
                        <p>Se le mandara un corre a su nueva direción.</p>
                        <small>Nos compremetemos a que nunca, nunca, le enviaremos correo que no desee o le daremos su correo electrónico a extraños.</small>
                    </div>
                </div>
            </div>
            <div class="col border">
                <div class="m-3">

                    <form class="py-3 px-4" action="{{route('perfil.changePassword')}}" method="post">
                        @csrf @method('PATCH')
                        <legend class="my-2">Actualizar contraseña</legend>
                        <div class="form-group">
                            <input
                            class="form-control bg-light shadow-sm @error('cuenta') is-invalid @else border-0 @enderror"
                            type="password"
                            name="oldpassword"
                            placeholder="Contraseña actual..."
                            id="oldpassword"
                            value="{{ old('oldpassword') }}"
                            >
                        @error('oldpassword')
                            <small style="color: red">* {{ $message }}</small>
                        @enderror
                        </div>
                        <div class="form-group mt-4">
                            <input
                            class="form-control bg-light shadow-sm @error('cuenta') is-invalid @else border-0 @enderror"
                            type="password"
                            name="newpassword"
                            placeholder="Nueva contraseña..."
                            id="newpassword"
                            value="{{ old('newpassword') }}"
                            >
                        @error('newpassword')
                            <small style="color: red">* {{ $message }}</small>
                        @enderror
                        </div>
                        <div class="form-group">
                            <input
                            class="form-control bg-light shadow-sm @error('cuenta') is-invalid @else border-0 @enderror"
                            type="password"
                            name="repeatpassword"
                            placeholder="Repetir contraseña..."
                            id="repeatpassword"
                            value="{{ old('repeatpassword') }}"
                            >
                        </div>
                        @error('repeatpassword')
                            <small style="color: red">* {{ $message }}</small>
                        @enderror
                        <button class="btn btn-primary bt-md">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col border">
                <div>
                    <div class="m-3">
                        <h2><strong>Aviso legal</strong></h2>
                        <h3 class="mt-4">Aviso legal y términos de uso</h3> 
                        
                        En este espacio, el USUARIO, podrá encontrar toda la información relativa a los términos y condiciones legales que definen las relaciones entre los usuarios y nosotros como responsables de esta web. Como usuario, es importante que conozcas estos términos antes de continuar tu navegación. Gw2gg.Como responsable de esta web, asume el compromiso de procesar la información de nuestros usuarios y clientes con plenas garantías y cumplir con los requisitos nacionales y europeos que regulan la recopilación y uso de los datos personales de nuestros usuarios. Esta web, por tanto, cumple rigurosamente con el RGPD (REGLAMENTO (UE) 2016/679 de protección de datos) y la LSSI-CE la Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico.
                        
                        <a href="{{ route('legal') }}">Leer...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
