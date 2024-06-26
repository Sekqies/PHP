<div class="input-field">
    <input type="text" name="titulo" value="{{ isset($linha->titulo) ? $linha->titulo : ''
}}" required>
    <label>Título</label>
</div>
<div class="input-field">
    <input type="text" name="descricao" value="{{ isset($linha->descricao) ? $linha->descricao : '' }}" required>
    <label>Descrição</label>
</div>
<div class="input-field">
    <input type="number" name="valor" value="{{isset($linha->valor) ? $linha->valor : ''}}" min='0' max='999.99' step='0.01' required>
    <label>Valor</label>
</div>
<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="arquivo" {{ isset($linha->imagem) ? 'required' : '' }}>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($linha->imagem))
<div class="input-field">
    <img width="150" src="{{asset($linha->imagem)}}" />
</div>
@endif
<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" value="{{ isset($linha->publicado) ? 'checked' : '' }}">
            <span>Publicar?</span>
        </label>
    </p>
    <br><br>
</div>