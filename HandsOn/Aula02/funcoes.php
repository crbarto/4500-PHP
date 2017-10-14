<?php
	function isParOrImpar($num){
		if ($num % 2 == 0)
		{
			return "PAR";
		}	
		else  
			{
				return "IMPAR";
			}

	}


	function isMaior($num1, $num2)
	{
		$maior;
		if ($num1 > $num2) 
		{
		   $maior = $num1;
		}
		elseif ($num2 > $num1) 
		{
			$maior = $num2;
		}
		else
		{
			$maior = "IGUAIS";

		}
		return $maior;
	}

	echo isParOrImpar(26);
	echo "<hr>";
	echo isParOrImpar(21);
	echo "<hr>";
	echo isMaior(25,10);
?>
