<?php 
session_start();
$_SESSION["msg"] = "";

trait log
{

	public function salvaLog($message)
	{
	    
	    $_SESSION["msg"] = $_SESSION["msg"] . $message .'</br>';

	}

	public function exibiLog()
	{

			return  $_SESSION["msg"];

	}

}

class math 
{

}

class conta extends math
{

	use log;

	public function soma($a,$b)
	{

		$soma =  $a + $b;
		$this->salvaLog("Soma a+b: ".$soma);
		return $soma;

	}

	public function subtracao($a,$b)
	{

		$sub = $a - $b;
		$this->salvaLog("Subtracao a-b: " . $sub);
		return $sub;

	}

}

$trait = new conta();
echo $trait->soma(10,15) .'</br>';
echo $trait->soma(25,50).'</br>';
echo $trait->subtracao(35,5).'</br>';
echo "Exibindo o Log </br>";
echo $trait->exibiLog();
session_destroy();
echo "<hr>";
