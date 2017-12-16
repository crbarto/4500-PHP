<?php
namespace Controller\BannerController;
use src\Conexao as Conexao;
use Model\BannerModel\BannerModel as Banner;
use src\Mensagem as Mensagem;
use Repository\BannerRepository\BannerRepository as Repository;
class BannerController
{

	public static function read($id = null)
	{
		$result = Repository::select($id);
		if ( is_null($id)) {

			$banners = [];

			foreach ($result as $banner) {

				$banners[] = new Banner($banner['nome'],
										$banner['descricao'],
										$banner['url'],
										$banner['id'] );

			}
	        return $banners;

		} else {

			return new Banner($result['nome'],$result['descricao'],$result['url'],$result['id'] );

		}     

	}

	public static function create()
	{
		if (!empty($_POST['nome']) && !empty($_POST['url'])){

			$banner = new Banner($_POST['nome'],$_POST['descricao'],$_POST['url']);

			if ( Repository::insert( $banner ) )
			{
				Mensagem::salvaMsg("success","Sucesso!","Banner criado");

				header('location:index.php?route=banner/read');

			}
			else
			{

				Mensagem::salvaMsg("warning","Erro!","Bannser nao foi criado");

			}
		}
	}

	public static function update($id)
	{
		if (!empty($_POST['nome']) && !empty($_POST['url'])){

			$banner = new Banner($_POST['nome'],$_POST['descricao'],$_POST['url'], $id);

			if (Repository::update( $banner ))
			{
				Mensagem::salvaMsg("success","Sucesso!","Banner alterado");
				header('location:index.php?route=banner/read');

			}
			else
			{
				Mensagem::salvaMsg("warning","Aviso!","Banner nao alterado");
				echo "Erro ao fazer update do banner";

			}
		}
		return BannerController::read( $_GET['id'] );
	}

	public static function delete($id)
	{

		if ( isset( $_POST['delete'] ) ) {

			$banner = new Banner($_POST['nome'],$_POST['descricao'],$_POST['url'], $id);

			if ( Repository::delete( $banner ) )
			{

				Mensagem::salvaMsg("success","Sucesso!","Banner Excluido");
				header('location:index.php?route=banner/read');
				
			}
			else
			{

				Mensagem::salvaMsg("warning","Aviso!","Banner nao excluido");
				header('location:index.php?route=banner/read');

			}

		}	

		return BannerController::read( $_GET['id'] );
	}

}