<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css" />
	</head>
	<body>
		<div class="container">
			<?php
				// Conexao com o banco
				require "src/Conexao.php";

				// Controllers
				require "Controller/BannerController/BannerController.php";	

				//Models
				require "Model/BannerModel/BannerModel.php";

				if (!isset($_GET['route']))
				{

					$_GET['route'] = 'banner/read';

				}

				switch ($_GET['route']) {

					case 'banner/read':
						$banners = ( isset( $_GET['id'] ) ) ? BannerController::read($_GET['id']) : BannerController::read();
						require 'view/banner/read.php';
						break;	

					case 'banner/create':
						require 'view/banner/create.php';
						if (!empty($_POST['nome']) && !empty($_POST['url'])){
							BannerController::create();
						}

						break;
					case 'banner/update':
						$banners = BannerController::read($_GET['id']);
						require 'view/banner/update.php';
						if (!empty($_POST['nome']) && !empty($_POST['url'])){
							BannerController::update($_GET['id']);
						}

						break;

					case 'banner/delete':
						$banners = BannerController::read($_GET['id']);
						require 'view/banner/delete.php';
						if (isset($_POST['delete']))
						{

							BannerController::delete($_GET['id']);	

						}


					default:
					{
						# code...
						break;
					}
				}
			?>
		</div>
	</body>	
</html>
