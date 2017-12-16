<h1>Deletar Banner</h1>
<form action="" method="POST">
	<input type="hidden" name="delete" value="true">
	<div class="form-group">
		<label for="nome">Nome</label>
		<p class="form-control-static"><?= $data->getNome(); ?></p>
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<p class="form-control-static"><?= $data->getDescricao(); ?></p>
	</div>
				
	<div class="form-group">
		<label for="url">Url</label>
		<p class="form-control-static"><?= $data->getUrl(); ?></p>
	</div>

	<div class="form-group">
		<label for="categoria">Categoria</label>
		<p class="form-control-static"><?= $data->getCategoria(); ?></p>
	</div>

	<button class="btn btn-danger">Apagar</button>
</form>

	