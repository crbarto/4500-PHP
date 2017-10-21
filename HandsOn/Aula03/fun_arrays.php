<?php

	$pessoas = [
		[
			'nome' => 'Cláudio Barto',
			'idade' => 42,
			'profissao' => 'Analistta Sistemas'
		]
		,
		[
			'nome' => 'Pedrinho',
			'idade' => 23,
			'profissao' => 'outras'
		]
	];
	/******************
	foreach ($pessoas as $pessoa) {
		if (array_key_exists('nome', $pessoa)) 
		{
		echo 'Existe a chave';
		}
	}
	**********************/

	$letras = array('a', 'b', 'c');
	$chave = array_search('b', $letras);
	echo $chave;

	echo '<hr>';

	$estados = ['MG','SP','RJ','SP'];
	$unique =  array_unique($estados);

	print_r($unique);

	echo '<hr>';




?>