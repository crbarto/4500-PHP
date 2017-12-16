<?php
namespace Repository\BannerRepository;
use src\Conexao as Conexao;
class BannerRepository{

	public static function select() {

	}

	public static function insert($banner){

		
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

	}

	public static function update( $banner ) {

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
	}

	public function delete() {

	}

}