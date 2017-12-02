<?php

class BannerController
{

	public static function read($id = null)
	{
		$con = Conexao::getInstance();

		if (is_null( $id )) 
		{

			$requisicao = $con->query('SELECT * FROM banners');
			return $requisicao->fetchAll();

		} 
		else
		{
			//$query = $con->prepare("SELECT * FROM banners WHERE id = :id");
			$query = "SELECT * FROM banners WHERE id = $id";
			//$requisicao = $query->execute( array( [':id' => $id] ) );
			$requisicao = $query->execute($query);
			return $requisicao->fetch();

		}

	}

	public static function create()
	{

		

	}

}