<?php
namespace src;

class View
{

	public static function render($data,$file, $header = 'View/Base/privateCabecalho.php')
	{

		require $header;
		require $file;

	}

}