<h1>Alterar Banner</h1>
<form action="" method="POST">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input class="form-control" id="nome" name="nome" placeholder="Nome" value="<?= $banners->getNome();?>" >
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<input class="form-control" id="descricao" name="descricao" placeholder="Descrição" 
		value="<?= $banners->getDescricao();?>" >
	</div>
				
	<div class="form-group">
		<label for="url">Url</label>
		<input class="form-control" id="url" name="url" placeholder="Url" 
		value=" <?= $banners->getUrl();?>" >
	</div>

	<button class="btn btn-primary">Alterar</button>

</form>

	