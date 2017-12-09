<?php
namespace src\Conexao;
class Conexao
{

	private static $instance = null;

	private function __construct()
	{



	}

	public static function getInstance()
	{
		
		if (is_null(self::$instance))
		{

			self::$instance = new \pdo('pgsql:host=localhost;dbname=dexter_lite;','barto','1234');

		}
		return self::$instance;

	}

}

