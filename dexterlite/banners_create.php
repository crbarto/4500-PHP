<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>CRIAR BANNER</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
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
		</div>
	</body>	
</html>
<?php 
	require "src/Conexao.php";
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
