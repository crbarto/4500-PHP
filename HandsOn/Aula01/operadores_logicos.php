<?php 
	echo '<pre>';
	$var1 = true;
	$var2 = true;

	var_dump($var1 and $var2);
	$var2 = false;
	var_dump($var1 or $var2);
	$var1 = false; 
	var_dump($var1 xor $var2);
	$var1 = true;
	var_dump($var1 && $var2);
	$var1 = false;
	var_dump($var1 || $var2);
	var_dump(!$var2);