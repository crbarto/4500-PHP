<?php
	if (!empty($_POST['nome']) && !empty($_POST['url'])) {
		$con = Conexao::getInstance();
		$query = $con->prepare("insert into banners(nome,
  													descricao,
													url
													) values (
													:nome,
													:descricao,
													:url
													)"
													);
		$banner = [
					":nome"       => $_POST['nome'],
					":descricao"  => $_POST['descricao'],
					":url"        => $_POST['url']
				];
		if ($query->execute($banner))
		{
			header('location:index.php?route=banners');
		}
		else
		{
			echo "Erro na inclusao";
		}
	}
?>
<form action="" method="POST">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input class="form-control" id="nome" name="nome" placeholder="Nome">
	</div>
	
	<div class="form-group">
		<label for="descricao">Descrição</label>
		<input class="form-control" id="descricao" name="descricao" placeholder="Descrição">
	</div>
				
	<div class="form-group">
		<label for="url">Url</label>
		<input class="form-control" id="url" name="url" placeholder="Url">
	</div>

	<button class="btn btn-primary">Criar</button>

</form>

	