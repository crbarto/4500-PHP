<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>HOME</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			
			<?php
			require 'src/Conexao.php';

			$con = Conexao::getInstance();

			$banners = $con->query('SELECT * FROM banners');
			$banners = $banners->fetchAll();
			echo "<table class='table table-striped'>";
			echo "<thead>";
				echo "<tr>";
					echo "<th>ID</th>";
					echo "<th>NOME</th>";
					echo "<th>DESCRIÇÃO</th>";
					echo "<th>URL</th>";
				echo "</tr>";
			echo "<thead>";

			foreach ($banners as $banner) {
				echo "<tbody>";
					echo "<tr>";
						echo "<td>".$banner['id']."</td>";
						echo "<td>".$banner['nome']."</td>";
						echo "<td>".$banner['descricao']."</td>";
						echo "<td>".$banner['url']."</td>";
					echo "<tr>";
				echo "</tbody>";
			}
			?>
		</div>	
	</body>
</html>


