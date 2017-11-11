<?php
class NomedaClasse
{

	public $propriedade = 10;
	private $novapropriedade = 'Maria do bairro';

	public function metodo()
	{

		echo 'teste';
	}
}

$objeto = new NomedaClasse();

echo $obejto->propriedade;
