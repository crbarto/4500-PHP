<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>CRIAR BANNER</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<?php
				// Conexao com o banco
				require "src/Conexao.php";

				// Controllers
				require "Controller/BannerController/BannerController.php";	

				if (!isset($_GET['route']))
				{

					$_GET['route'] = 'home';

				}

				switch ($_GET['route']) {
					case 'home':
						echo "<h1>Home</h1>";
						break;
					case 'banners/read':
						$banners = ( isset( $_GET['id'] ) ) ? BannerController::read($_GET['id']) : BannerController::read();
						require 'view/banner/read.php';
						break;	

					case 'banners/create':
						require 'view/banner/create.php';

						break;

					default:
						# code...
						break;
				}
			?>
		</div>
	</body>	
</html>
