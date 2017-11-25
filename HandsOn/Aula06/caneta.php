<?php
class caneta
{

	private static $durabilidade = 10;
	private $cor;
	private static $numcaneta = 0;

	public function __construct($cor)
	{

		$this->cor = $cor;
		// $soma = self::$numcaneta;
		// $soma += 1;
		// self::$numcaneta = $soma;
		self::$numcaneta += 1;
	}

	public static function getNumCaneta()
	{

		return self::$numcaneta;

	}

	public function getCor()
	{

		return $this->cor;

	}

	public function getDurabilidade()
	{

		return self::$durabilidade;

	}

	public function setDurabilidade($durabilidade)
	{

		self::$durabilidade = $durabilidade;

	}

}


$canetaAzul = new caneta("Azul");
echo "Numero de Caneta: " . $canetaAzul->getNumCaneta();

echo $canetaAzul->getCor() . "</br>";
echo $canetaAzul->getDurabilidade() . "</br>";

$canetaVermelha = new caneta("Vermelha");
echo $canetaVermelha->getCor() . "</br>";
echo $canetaVermelha->getDurabilidade() . "</br>";

echo "Mudando a durabilidade </br>";
$canetaVermelha->setDurabilidade(20);

echo "Durabilidade Caneta Azul: {$canetaAzul->getDurabilidade()} </br>";
echo "Durabilidade Caneta Vermelha: " . $canetaAzul->getDurabilidade() . "</br>";

echo "Numero de Caneta: " . $canetaAzul->getNumCaneta() ."</br>" ;

echo "outra maneira de acessar funcao statica->: " . $canetaAzul::getNumCaneta();




