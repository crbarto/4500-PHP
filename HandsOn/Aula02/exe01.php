<?php

	// Estrutura de array 
	echo "<pre>";
	$cont = 0; // contador do event_base_loop(event_base)
	$tamanho = 10;
	$anum = array();
	for ($cont=0; $cont < $tamanho; $cont++) { 
		$num = mt_rand(0,10);
		// $anum[$cont] = $num; // pode ser assim
		$anum[] = $num;
		echo "Numero: ".$num ."</br>";
	}	
	echo "<br>Usando for <br>";
	for ($i=0; $i < $tamanho; $i++) { 
		echo $anum[$i];
		echo "</br>";
	}

	echo "<br>Usando for each <br>";

	foreach ($anum as $key => $value) {
		echo $value . ";";
	}
	echo "</br>";
	echo "</br>";
	echo "Primeiro Numero Array: " .$anum[0]."</br>" ;
	echo "Ultimo Numero Array: " .$anum[$tamanho - 1]."</br>" ;

	echo "Tamanho do array sizeof(): " .sizeof($anum);
	echo "<br>";
	echo "Tamanho do array count(): " .count($anum);

	echo "<br>";
	echo "<br>";

	echo "<br>Somente numeros par";
	echo "<br>";		
	foreach ($anum as $key => $value) {

		if ($value % 2 == 0) {
			echo $value ."<br>";
		}
	}

	echo "<br>";
	echo "<br>";		
	echo "<br>Somente numeros impar";
	echo "<br>";		

	foreach ($anum as $key => $value) {

		if ($value % 2 != 0) {
			echo $value ."<br>";
		}
	}

	echo "<br>";		
	echo "<br>";
	$aux = $anum[0];		
	foreach ($anum as $key => $value) {

		if ($value > $aux) {
			$aux = $value;

		}
	}

	echo "Maior Numero: " .$aux ."<br>";
	echo "<br>";
	echo "<br>";		

	$aux = $anum[0];		
	foreach ($anum as $key => $value) {

		if ($value <  $aux) {
			$aux = $value;

		}
	}
	echo "Menor Numero: " .$aux ."<br>";
	echo "<br>";
	echo "<br>";		

	// ORDEM CRESCENTE
	echo "Ordem CRESCENTE <br>";
	echo "<br>";
	echo "<br>";		

	for ($i=0; $i < $tamanho; $i++) {
		for ($j= $i+1; $j < $tamanho; $j++) { 
				
			if ($anum[$i] > $anum[$j]) {
				$temp = $anum[$i];
				$anum[$i] = $anum[$j];
				$anum[$j] = $temp;
			}
		}	
	}

	// TODOS
	foreach ($anum as $numero) {
		echo $numero . ",";
	}

	echo "<hr>";

	sort($anum);
	foreach ($anum as $numero) {
		echo $numero . ",";
	}

	echo "<hr>";

	//------------------------------------------------------

	// ORDEM DECRESCENTE

	for ($i=0; $i < $tamanho; $i++) {
		for ($j= $i+1; $j < $tamanho; $j++) { 
				
			if ($anum[$i] < $anum[$j]) {
				$temp = $anum[$i];
				$anum[$i] = $anum[$j];
				$anum[$j] = $temp;
			}
		}	
	}

	// TODOS
	foreach ($numeros as $numero) {
		echo $numero . ",";
	}

	echo "<hr>";

	rsort($numeros);
	foreach ($numeros as $numero) {
		echo $numero . ",";
	}

?>