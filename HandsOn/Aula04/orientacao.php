<?php
class NomeClasse
{

	public $propriedade = 'Claudio Barto';

	public function nome()
	{

		echo $this->propriedade;
	}

};

class OutraClasse extends NomeClasse
{

	private $nome_outra_clasee = 'Segunda Classe';

	public function MostraOutra()
	{
		echo '</br> (NomeClasse) Propriedade ' .$this->propriedade;
	}
}


$objeto = new NomeClasse();

$objeto->nome();

$OutroObjeto = new OutraClasse();
$OutroObjeto->MostraOutra();
