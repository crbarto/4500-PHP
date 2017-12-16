<?php
namespace src;
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

			self::$instance = new \PDO('pgsql:host=localhost;dbname=dexter_lite;','barto','1234');
			self::$instance->setAttribute( \PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;

	}

}

