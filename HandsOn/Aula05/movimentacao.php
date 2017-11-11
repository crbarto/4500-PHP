<?php
	// Criando a classe conta
	abstract class Conta
	{
		public $saldo = 0;
		public $numConta = Null;
		public function __construct($nroConta,$saldoini)
		{
			$this->saldo = $saldoini;
			$this->numConta = $nroConta;
		}

		public function depositar($valor)
		{

			$this->saldo += $valor;
			echo "<p>Depositando o valor de: {$valor} reais </p>";
		}
			
		public function sacar($valor)
		{

			$this->saldo -= $valor;
			echo "<p>Sacando o valor de: {$valor} reais </p>";
		}
		
		/*
		final public function sacar($valor)
		{

			$this->saldo -= $valor;
			echo "<p>Sacando o valor de: {$valor} reais </p>";
		}
		*/
		public function verSaldo()
		{

			echo "<p>Saldo atual de: {$this->saldo} reais </p>";
		}
	}

	class Corrente extends Conta
	{

		public function sacar($valor)
		{

			$this->saldo -= ($valor *= 2);
			echo "<p>Sacando o valor de: {$valor} reais </p>";
		}
	}

	class Poupanca extends Conta
	{



	}


	$objCC = new Corrente('00911-x',10);
	$objCC->verSaldo();
	$objCC->depositar(3500);
	$objCC->sacar(500);
	$objCC->verSaldo();


	echo "</hr>Poupanca";
	$objCP = new Poupanca('00911-P',100);
	$objCP->verSaldo();
	$objCP->depositar(3500);





