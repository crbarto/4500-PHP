<?php 

include_once 'cursos.php';
include_once 'periodos.php';

// [
// 		'id' => 0,
// 		'curso_id' => 0,
// 		'periodo_id' => 0,
// 		'instrutor_id' => 0
// 	]


for ($i=1; $i <= 10; $i++) { 
	$turmas[$i]['id'] = $i;
	$turmas[$i]['curso_id'] = lista_cursos(mt_rand(1,5));
	$turmas[$i]['periodo_id'] = mt_rand(1,5);
	$turmas[$i]['instrutor_id'] = 'indefinido';
}