<?php
namespace Repository\BannerRepository;
use src\Conexao as Conexao;
class BannerRepository{

	public static function select($id) {

		$con = Conexao::getInstance();


		if (is_null( $id ) )
		{

			$requisicao = $con->query('SELECT * FROM banners ORDER BY id');
			$result = $requisicao->fetchAll(\PDO::FETCH_ASSOC);
			return $result;
			
		} 
		else
		{

			$requisicao = $con->query("SELECT * FROM banners WHERE id = $id ORDER BY id");
			//return $requisicao->fetch(PDO::FETCH_ASSOC);
			$result = $requisicao->fetch(\PDO::FETCH_ASSOC);
			return $result;

		}
		return $banners;		

	}

	public static function insert($banner){
		try{

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
				$param = [
				":nome"       => $banner->getNome(),
				":descricao"  => $banner->getDescricao(),
				":url"        => $banner->getUrl()
				];
				return $query->execute($param);

		} catch (\PDOException $e) {

			// echo "<pre>";
			// print_r($e);
			return false;
		}		

	}

	public static function update( $banner ) {
		try {

			$con = Conexao::getInstance();
			$query = $con->prepare("UPDATE banners SET nome = :nome,
					descricao = :descricao,
					url = :url
					WHERE id = :id");

			$param = [
				":nome"       => $banner->getNome(),
				":descricao"  => $banner->getDescricao(),
				":url"        => $banner->getUrl(),
				":id"		  => $banner->getId()
				];

			return $query->execute($param);

		} catch (\PDOException $e) {

			echo "<pre>";
			print_r($e);

		}
	}

	public function delete( $banner ) {
		try {

			$con = Conexao::getInstance( $banner );
			$query = $con->prepare("DELETE FROM banners WHERE id = :id");

			$param = [":id" => $banner->getId() ];

			return $query->execute($param);

		} catch (\PDOException $e) {

			echo "<pre>";
			print_r($e);

		}

	}

}