<h1>Alterar Banner</h1>
<form action="" method="POST">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $data->getNome();?>" >

	</div>

	<div class="form-group">
		<label for="descricao">Descrição</label>
		<input class="form-control" id="descricao" name="descricao" placeholder="Descrição" 
		value="<?= $data->getDescricao();?>" >
	</div>
	
	<div class="form-group">
		<label for="url">Url</label>
		<input class="form-control" id="url" name="url" placeholder="Url" 
		value=" <?= $data->getUrl();?>" >
	</div>

	<button class="btn btn-primary">Alterar</button>

</form>

	