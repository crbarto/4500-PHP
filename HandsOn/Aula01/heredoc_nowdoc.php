<?php
	$certi = "Zend";
	$curso = <<< TEXTO

	Estou me preparando para a 
		certificacao $certi na 4Linux;

	TEXTO;

	echo $curso;
	echo '<hr>';

	$curso = <<< 'TEXTO'
	Estou me preparando  para a certificacao $certi na 4Linux;
	TEXTO;

	echo $curso;
?>