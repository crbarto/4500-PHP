<?php 
	echo '<pre>';
	$num1 = '10';
	$num2 = '8';
	$num3 = 4;
	$num4 = 10;

	var_dump( $num1 == $num2);
	echo '<br>';

	var_dump($num1 == $num4);
	echo '<br>';

	var_dump( $num1 == $num3);
	echo '<br>';

	var_dump( $num2 == $num3);
	echo '<br>';

	var_dump( $num2 == $num4);
	echo '<br>';

	var_dump($num4 == $num4);
	echo '<br>';

	$var = '10 casa 10';
	$var2 = '15 casa 30';
	echo $var + $var2;
?>