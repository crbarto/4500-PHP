<?php
	// Criando a classe conta
	class Conta
	{

		protected $nroBanco;
		protected $agencia;
		protected $nroConta;
		protected $nomeTitular;
		protected $saldo = 0;

		// funcao construtora
		public function __construct ($bco,$ag,$tit,$saldoini)
		{

			$this->nroBanco = $bco;
			$this->agencia = $ag;
			$this->nomeTitular = $tit;
			$this->saldo = $saldoini;
			$this->gerarNroConta();
		}


		public function depositar($valor)
		{

			$this->saldo =+ $valor;
			echo "<p>Depositando o valor e R$ {$valor} reais</p>";

		}

		public function sacar($valor)
		{

			$this->saldo =- $valor;
			echo "<p>Sacando o valor e R$ {$valor} reais</p>";
			
		}

		public function verSaldo()
		{

			echo "<p>Saldo atual e R$ {$this->saldo} reais</p>";

		}

		public function verTitular()
		{

			echo "<p>Titular da conta {$this->nomeTitular}</p>";

		}

		public function verNroConta()
		{

			echo "<p>Numero da conta {$this->nroConta}</p>";

		}

	} ///// Fim da classe Conta

	// Cria a classe ContaCorrente
	class contaCorrente extends Conta

	{
		private $chequeEspecial = false;

		public function liberaChequeEspecial()
		{

			$this->chequeEspecial = true;

		}

		protected function geraNroConta()
		{

			$this->nroConta = "cc".rand();

		}

	}

	// Classe conta poupanca
	class ContaPoupanca extends Conta
	{

		const JUROS = 0.5;

		public function previsaoProximoMes()
		{

			$previsao = $this->saldo + (($this-saldo * sef::JUROS) / 100);
			echo "<p>Previsao para o proximo mes: {$previsao}</>";

		} 

		public function gerarNroConta()
		{

			$this->nroConta = 'cp'.rand();

		}

	}
