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
		$con = Conexao::getInstance();


		if (is_null( $id )) 
		{

			$requisicao = $con->query('SELECT * FROM banners ORDER BY id');
			$result = $requisicao->fetchAll(\PDO::FETCH_ASSOC);
			$banners =  [];
			foreach ($result as $banner) {

				$banners[] = new Banner($banner['nome'],$banner['descricao'],$banner['url'],$banner['id']);

			}
		} 
		else
		{

			$requisicao = $con->query("SELECT * FROM banners WHERE id = $id ORDER BY id");
			//return $requisicao->fetch(PDO::FETCH_ASSOC);
			$banner = $requisicao->fetch(\PDO::FETCH_ASSOC);
			$banners = new Banner($banner['nome'],$banner['descricao'],$banner['url'],$banner['id']);

		}
		return $banners;

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

			$banner = new Banner($_POST['nome'],$_POST['descricao'],$_POST['url']);

			if (Repository::update( $banner ))
			{
				echo "fez update";
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

		if (isset($_POST['delete'])) {

			$con = Conexao::getInstance();
			$query = $con->prepare("DELETE FROM banners WHERE id = :id");

			$banner = [":id" => $id];

			if ($query->execute($banner))
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