<?php

	// Condicao Aprovado  Nota >= 7 && Frquencia >= 8;
	// Condiçao Recuperacao Nota >= 5 && < 7 && Frequencia >= 8
	// Condicao Reprovado Nota < 5 || Frequencia < 8

	$nota = 6;
	$frequencia = 8;

	switch (true) {
			case ($nota >= 7 && $frequencia >= 8):
				echo "APROVADO";
				break;
			case ($nota >= 5 && $nota < 7 && $frequencia >= 8 ):
				echo "RECUPERACAO";
				break;
			case ($nota < 5 || $frequencia < 8 ):
				echo "REPROVADO";
				break;
			default:
				echo "INDEFINIDO";
				break;
	}	
?>