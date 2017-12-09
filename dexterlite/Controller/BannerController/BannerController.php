<?php
use src\Conexao\Conexao as Conexao;
use Model\BannerModel\BannerModel as Banner;
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

				header('location:index.php?route=banner/read');

		}
		else
		{

			echo "Erro ao adicioar o bannser";

		}

	}

	public static function update($id)
	{

		$con = Conexao::getInstance();
		$query = $con->prepare("UPDATE banners SET nome = :nome,
													descricao = :descricao,
													url = :url
												WHERE id = :id");

		$banner = [
					":nome"       => $_POST['nome'],
					":descricao"  => $_POST['descricao'],
					":url"        => $_POST['url'],
					":id"         => $id
					];

		if ($query->execute($banner))
		{

				header('location:index.php?route=banner/read');

		}
		else
		{

			echo "Erro ao fazer update do banner";

		}

	}

	public static function delete($id)
	{

		$con = Conexao::getInstance();
		$query = $con->prepare("DELETE FROM banners WHERE id = :id");

		$banner = [":id" => $id];

		if ($query->execute($banner))
		{

				header('location:index.php?route=banner/read');

		}
		else
		{

			echo "Erro ao deletar o banner";
			header('location:index.php?route=banner/read');

		}

	}

}