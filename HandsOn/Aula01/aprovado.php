<?php 
	// Condicao Aprovado  Nota >= 7 && Frquencia >= 8;
	// Condiçao Recuperacao Nota >= 5 && < 7 && Frequencia >= 8
	// Condicao Reprovado Nota < 5 || Frequencia < 8

	$nota = 8;
	$frequencia = 7;
	if ($nota >= 7 && $frequencia >= 8) {
		echo "Aprovado";
	} elseif ($nota >= 5 && $nota < 7 && $frequencia >= 8 ) {
		echo "Recuperacao";

	} elseif ($nota < 5 || $frequencia < 8 )  {
		echo "Reprovado";
	} else {
		echo "Indeterminado";
	}
?>