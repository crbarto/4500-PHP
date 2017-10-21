<?php 

include_once 'dados/dados.php';
echo "<pre>";

/*
 *	Função que busca por Id;
 *	Paramêtros 
 *	$array, local onde vai ser buscado a informação
 *	$id, O Id que está sendo buscando dentro do array
**/

function buscaPorId($array,$id){

	$find = array_filter($array, function($array_values) use ($id) {
		return $array_values['id'] == $id;
	});
	return $find;
}

// print_r(buscaPorId($alunos, 40));

/*
 *	Função que busca Matriculas por Id do Curso;
 *	Paramêtros 
 *	$matriculas, array com todas as matrículas
 *	$id, O Id do curso que estamos buscando
**/

function buscaMatriculasCurso($matriculas,$curso_id){

	$matriculas = array_filter($matriculas, function($array) use ($curso_id) {
		return $array['curso_id'] == $curso_id;
	});
	return $matriculas;
}

$matriculas500 = buscaMatriculasCurso($matriculas,500);


/*
 *	Foreach para pegarmos os alunos do curso 500
 *	Primeira Etapa -> Utilizamos a função buscaPorId para pegarmos os dados do aluno;
 *	é passado o array de alunos e o id do aluno através da matrícula
 *	Depois colocamos os dados do aluno e da matrícula dentro de um outro array
 *	$i é utilizado para iterarmos nosso array e assim não sobrescrevê-lo;
**/

$i = 0;
foreach ($matriculas500 as $matricula) {
	$alunos500[$i]['aluno'] = buscaPorId($alunos,$matricula['aluno_id']);
	$alunos500[$i]['matricula'] = $matricula;

	$i++;
}

// print_r($alunos500);

/*
 *	Função que busca Matriculas Aprovadas por Id do Curso;
 *	Paramêtros 
 *	$matriculas, array com todas as matrículas
 *	$id, O Id do curso que estamos buscando
**/

function buscaMatriculasAprovadasCurso($matriculas,$curso_id){

	$matriculasCurso = buscaMatriculasCurso($matriculas,$curso_id);

	$matriculasAprovadas = array_filter($matriculasCurso, function($array){
		$mediaProvas = ($array['notas']['prova_1'] + $array['notas']['prova_2']) / 2;
		if ($mediaProvas >= 7 && $array['frequencia'] >= 8) {
		 	return $array;
		 } 
	});

	return $matriculasAprovadas;
}

$matriculasAprovados500 = buscaMatriculasAprovadasCurso($matriculas, 500);

$i = 0;
foreach ($matriculasAprovados500 as $matricula) {
	$alunosAprovados500[$i]['aluno'] = buscaPorId($alunos,$matricula['aluno_id']);
	$alunosAprovados500[$i]['matricula'] = $matricula;

	$i++;
}

if (isset($alunosAprovados500)) {
	print_r($alunosAprovados500);	
} else {
	echo 'Todos Reprovados';
}

