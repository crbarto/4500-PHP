<?php
	class EntregaNormal
	{

		private $VlrKm = 1.20;
		public function CalculaFreteNormal($Km)
		{

			return $Km * $this->VlrKm;
		}


	}

	class EntregaRapida
	{

		private $VlrKm = 1.80;
		public function CalculaFreteRapido($Km)
		{

			return $Km * $this->VlrKm;
		}

	}

	class EntregaVip
	{

		private $VlrKm = 2.30;
		public function CalculaFreteVip($Km)
		{

			return $Km * $this->VlrKm;
		}


	}


	$objEntregaNomal = new EntregaNormal();
	echo $objEntregaNomal->CalculaFreteNormal(50)."</br"; 

	$objEntregaRapida = new EntregaRapida();
	echo $objEntregaRapida->CalculaFreteRapido(50) . "</br"; 

	$objEntregaVip = new EntregaVip();
	echo $objEntregaVip->CalculaFreteVip(50) . "</br"; 



