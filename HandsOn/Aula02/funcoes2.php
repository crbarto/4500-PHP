<?php
	// funcoes 
	function gera_array($tam = 10,$ini = 0, $fim = 10)
	{
		$arr = array();
		for ($i=0; $i < $tam; $i++) { 
			$arr[] = mt_rand($ini,$fim);
		}
		return $arr;
	}
	function isPar($array){
		foreach ($array as $key => $value) {
			if ($value % 2 == 0 ){
				$pares[] = $value;
			}
		}
		return $pares;
	}
	function isImpar($array){
		foreach ($array as $key => $value) {
			if ($value % 2 != 0 ){
				$impares[] = $value;
			}
		}
		return $impares;
	}	
	// fim das funcoes

	$numeros = gera_array(15,0,100);
	var_dump($numeros);

	echo "<hr>";
	$pares = isPar($numeros);
	var_dump($pares);

	echo "<hr>";
	$impares = isImpar($numeros);
	var_dump($impares);

	echo "<hr>";
	echo "Funcoes Anonimas";
	echo "<br>";

	$impares = array_filter($numeros,function($valor){ if ($valor % 2 != 0) { return $valor; } });
	var_dump($impares);
	echo "<br>";
	echo "<br>";

	$nomes = ['Barto','Maria','Jose'];
	$res = array_filter($nomes,function($valor){ if ($valor == 'Maria') { return $valor; } });
	var_dump($res);
?>