
<div class="row mt-5">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="{{ $route }}" method="post">
                    @csrf
                    @if (request()->routeIs('news.edit'))
                        @method('PATCH')
                    @endif
                    <div class="form-group">
                        <label for="title">Titulo:</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $new->title) }}">
                        @error('title')
                            <small style="color: red">* Obligatorio rellenar y no superar los 40 caracteres</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="preview">Preview del evento:</label>
                        <textarea class="form-control" name="preview" id="preview" cols="112" rows="5">
                        {{ old('preview', $new->preview) }}
                        </textarea>
                        @error('preview')
                            <small style="color: red">* Obligatorio rellenar y no superar los 249 caracteres</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="body">Cuerpo de la noticia:</label>
                        <textarea class="ckeditor form-control" name="body" id="body" cols="30" rows="10">
                        {{ old('body', $new->body) }}</textarea>
                        @error('body')
                            <small style="color: red">* Obligatorio rellenar</small>
                        @enderror
                    </div>
                    <button class="btn btn-primary">{{ $btnText }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
