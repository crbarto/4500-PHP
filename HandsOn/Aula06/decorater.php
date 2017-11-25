<?php 
interface ingredientes
{

	//  visibilidade (function) nomedafuncao(parametros)
	public function getPreco();

}

abstract class IngredienteBase implements ingredientes
{

	protected $pai;

	public function __construct( ingredientes $pai)
	{

		$this->pai = $pai;

	}

}

class cafe implements ingredientes
{

	public function getPreco()

	{

		echo "café custa R$ 1,20 </br>";
		return 1.2;

	}

}


class leite extends IngredienteBase 
{

	public function getPreco()
	{

		echo 'O Leite custa um adiocional de R$ 0,45 </br>';
		return $this->pai->getPreco() + 0.45;
	}

}

class chocolate extends IngredienteBase 
{

	public function getPreco()
	{

		echo 'O Chocolate custa um adiocional de R$ 0,50 </br>';
		return $this->pai->getPreco() + 0.50;
	}

}


$cafe = new cafe();
$cafeFinal = new leite($cafe);
$cafeChoco = new chocolate($cafeFinal);
echo "Preco final: R$ ".$cafeChoco->getPreco();


