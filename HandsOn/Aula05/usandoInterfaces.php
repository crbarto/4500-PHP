<?php
	interface Televisao
	{

		//in_array
		public function aumentaVolume();
		public function diminuiVolume();
		public function trocaCanal($novoCanal);
		public function liga($sts);
	}

	class TV implements Televisao
	{
		// declarando as variaveis
		private $volume = 9;
		private $canal = 5;
		private $estado = 'OFF';
		private $maxVolume = 45;
		private $canais = [3,4,5,8,10,15,25,28,40,40];
		
		// funcao para aumentar o volume da tv
		public function aumentaVolume()
		{

			++$this->volume;
			if ($this->volume > $this->maxVolume) 
			{
				$this->volume = $this->maxVolume;
			}
			echo "<p>Aumentando o volume para: {$this->volume} </p>";
		}

		// funcao para diminuir o volume da tv
		public function diminuiVolume()
		{

			--$this->volume;
			echo "<p>Diminuindo o volume para: {$this->volume} </p>";
		}

		// funcao para trocar o canal da tv
		public function trocaCanal($novoCanal)
		{

			if (in_array($novoCanal, $this->canais)) 
			{ 
				$this->canal = $novoCanal;
				echo "<p>Mudando o canal para: {$this->canal} </p>";
			}
			else
			{
				echo "<p>Canal invalido </p>";	
			}

		}

		public function liga($sts)
		{

			if ($sts == '1') 
			{
				$this->estado = "ON";
				echo "<p> A TV ligou estado = ON</p></br>";
				echo "<p> Canal Atual: {$this->canal}</p></hr>";
			} 
			else
			{
				$this->estado = "OFF";
				echo "<p> A TV desligou estado = OFF</p></br>";
			}

		}

	}

	$tv = new TV();
	$tv->liga('1');
	$tv->trocaCanal(5);
	$tv->aumentaVolume();
	$tv->aumentaVolume();
	$tv->trocaCanal(55);







