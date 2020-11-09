<div class="input-field">
  <input type="text" name="nome" value="{{ isset($produto->nome) ? $produto->nome : ''}}">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="preco" value="{{ isset($produto->preco) ? $produto->preco : ''}}">
  <label>Preço</label>
</div>

<div class="input-field">
  <input type="text" name="quantidade" value="{{ isset($produto->quantidade) ? $produto->quantidade : ''}}">
  <label>Quantidade</label>
</div>
