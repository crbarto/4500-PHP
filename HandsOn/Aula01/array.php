<?php
	echo '<pre>';
	$var[] = '4Linux';
	$var[] = 'PHP';

	$var[0] = 'Linux';
	var_dump($var);

	echo '<hr>';

	$pessoa = [
				'nome' => 'Claudio Barto',
				'idade' => 48,
				'profissao' =>  'Analista de sistemas'
	];
	var_dump($pessoa);

	echo '<hr>';

	$cursos = [
				'PHP' => ['INICIANTE'=>  500,'INTERMEDIARIO' => 501,'AVANCADO' => 502],
				'LINUX' => ['INICIANTE'=>  450,'INTERMEDIARIO' => 451,'AVANCADO' => 452]
	];
	var_dump($cursos);

	echo '<hr>BUSCA DADOS<br>';
	echo $cursos['PHP'] + ['EXTRAS' => 900];
	var_dump($cursos);

?>