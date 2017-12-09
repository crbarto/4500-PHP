<h1>Deletar Banner</h1>
<form action="" method="POST">
	<input type="hidden" name="delete" value="true">
	<div class="form-group">
		<label for="nome">Nome</label>
		<p class="form-control-static"><?= $banners['nome'] ?></p>
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<p class="form-control-static"><?= $banners['descricao'] ?></p>
	</div>
				
	<div class="form-group">
		<label for="url">Url</label>
		<p class="form-control-static"><?= $banners['url'] ?></p>
	</div>

	<button class="btn btn-danger">Apagar</button>

</form>

	