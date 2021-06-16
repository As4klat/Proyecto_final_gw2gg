<div class="my-4">
    <h4 class="display-4 text-center">Administración de cuenta</h4>
    <div class="container">
        <div class="row">
            <div class="col border">
                <div class="m-3">
                    <form class="py-3 px-4" action="{{route('perfil.changeEmail')}}" method="post">
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
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <div class="col border">
                <div>
                    <div class="m-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
