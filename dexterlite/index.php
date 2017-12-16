
			<?php

				// Auto Loader - carrega arquivos automaticamente
				require 'autoloader.php';

				session_start();

				// Conexao com o banco
				//require "src/Conexao.php";

				// Controllers
				//require "Controller/BannerController/BannerController.php";
				use Controller\BannerController\BannerController as Controller;

				//Models
				//require "Model/BannerModel/BannerModel.php";

				// Trait
				//require "src/MensagemTrait.php";					
				use src\Mensagem as Mensagem;

				// Pasta View
				use src\View as View;

				$msg = Mensagem::exibiMsg();

				if (!isset($_GET['route']))
				{

					$_GET['route'] = 'banner/read';

				}

				switch ($_GET['route']) {

					case 'banner/read':
						View::render(Controller::read(),'View/Banner/read.php');

						/*	
						$banners = ( isset( $_GET['id'] ) ) ? Controller::read($_GET['id']) : Controller::read();
						require 'view/banner/read.php';
						break;	
						*/
						break;

					case 'banner/create':
						View::render(Controller::create(),'View/Banner/create.php');
						/*
						require 'view/banner/create.php';
						if (!empty($_POST['nome']) && !empty($_POST['url'])){
							Controller::create();
						}
						*/

						break;

					case 'banner/update':

						View::render(Controller::update($_GET['id']),'View/Banner/update.php');

						// $banners = Controller::read($_GET['id']);
						// require 'view/banner/update.php';
						/*
						if (!empty($_POST['nome']) && !empty($_POST['url'])){
							//Controller::update($_GET['id']);
							View::render(Controller::update($_GET['id']),'View/Banner/update.php');
						}
						*/

						break;

					case 'banner/delete':

						View::render(Controller::delete( $_GET['id'] ),'View/Banner/delete.php');

						/*

						$banners = Controller::read($_GET['id']);
						require 'view/banner/delete.php';
						if (isset($_POST['delete'])) {

							Controller::delete($_GET['id']);	

						}

						*/

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
