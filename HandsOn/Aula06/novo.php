<?php
class pai 
{

	protected static $nome = "Classe Pai";

	public static function pegaNome()
	{

		return static::$nome;

	}

}

class filha extends pai
{

	protected static $nome = "Classe Filha";


}


echo filha::pegaNome() . "</br>" ;
echo pai::pegaNome();