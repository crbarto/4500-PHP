<?php 
	echo "<pre>";
	$num1 = 9;
	$num2 = 2;
	$mult = $num1 * $num2;
	$adic = $num1 + $num2;
	$subt = $num1 - $num2;
	$div1 = $num1 / $num2;
	$mod = $num1 % $num2;

	var_dump($mult);
	var_dump($adic);
	var_dump($subt);
	var_dump((int)$div1);
	var_dump($mod);

	echo "<hr>";

	$var1 = "10 casas";
	$var2 = "5 casas";
	$sum = (int)$var1 + (int)$var2;
	var_dump($sum);

	$soma = "10 casa" + 10;
	vardump($soma);

?>