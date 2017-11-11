<?php

	interface FreteStategy
	{
		public function calcular();
	}

	class FreteNormal implements FreteStategy
	{

		public function calcular()
		{

			echo "<p>Frete normal <p>";
			return 2;

		}

	}

	class FreteExpresso implements FreteStategy
	{

		public function calcular()
		{

			echo "<p>Frete Expresso <p>";
			return 5;

		}

	}

	class FreteTurbo implements FreteStategy
	{

		public function calcular()
		{

			echo "<p>Frete Turbo <p>";
			return 10;

		}

	}

	class Pedido
	{

		private $Frete;
		public function __construct(FreteStategy $Strategy)
		{

			$this->Frete = $Strategy;

		}

		public function calcularTotalPedido()
		{

			$totalPedido = 50;
			return $totalPedido += $this->Frete->calcular();

		}

	}

	$tipoFrete = 'turbo';

	if ($tipoFrete =='normal') {
		$freteStategy = new FreteNormal();
	} elseif ($tipoFrete =='expresso') {
		$freteStategy = new FreteExpresso();
	} elseif ($tipoFrete =='turbo') {
		$freteStategy = new FreteTurbo();
	}

	$pedido = new Pedido($freteStategy);
	echo "Total Pedido - R$ {$pedido->calcularTotalPedido()} reais";





