<?php 

// $matriculas = [
// 	[
// 		'id' => 0,
// 		'turma_id' => 0,
// 		'aluno_id' => 0,
// 		'notas' => [
// 					'prova_1' => '',
// 					'prova_2' => '',
// 					'recuperacao' => '',
// 				],
// 		'frequencia' => '',
// 	]
// ];

for ($i=1; $i <= 50 ; $i++) { 
	$matriculas[$i-1]['id'] = $i;
	$matriculas[$i-1]['turma_id'] = mt_rand(1,10);
	$matriculas[$i-1]['aluno_id'] = mt_rand(1,50);
	$matriculas[$i-1]['notas']['prova_1'] = mt_rand(0,100) / 10;
	$matriculas[$i-1]['notas']['prova_2'] = mt_rand(0,100) / 10;
	$matriculas[$i-1]['frequencia'] = mt_rand(0,10);
}
