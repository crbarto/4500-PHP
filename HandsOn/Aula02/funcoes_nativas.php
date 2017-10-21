<?php
	// Funcoes nativas do PHP
	echo "<pre>";

	$var = 0;
	if (empty($var)) {
		echo "VAZIO";
	}
	echo "<hr>";

	if (isset($var)) {
		echo "Setada";
	}

	echo "<hr>";

	if (isset($nome)) {
		echo "Setada";
	}

	$artilheiro = "Ronaldo";
	$gols = 19;

	$texto = 'O artilheiro do campeonato, %s tem %d gols';
	printf($texto, $artilheiro, $gols);

	echo "<hr>";

	$string = "Oi mundo";
	$strnovo = str_replace("Oi", "Ola", $string);
	echo $strnovo;


	echo "<hr>";

	// str_split
	$str = "Olá tudo bem";
	$array = str_split($str);
	var_dump($array);

	echo "<hr>";
	$texto = "STR_PAD";
	var_dump(str_pad($texto, 20));
	echo "<hr>";
	var_dump(str_pad($texto, 20,"*" ));
	echo "<hr>";
	var_dump(str_pad($texto, 20,"=",STR_PAD_LEFT));
	echo "<hr>";
	var_dump(str_pad($texto, 20,"=",STR_PAD_RIGHT));
	echo "<hr>";	
	var_dump(str_pad($texto, 20,"=",STR_PAD_BOTH));
	echo "<hr>";

	$email ="claudio.barto@autoavaliar.com";
	$dominio = strstr($email,'@');
	$user = strstr($email,'@',true);

	echo "Dominio: ".$dominio;
	echo "</br>";
	echo "Usuario: ".$user;




	


?>

