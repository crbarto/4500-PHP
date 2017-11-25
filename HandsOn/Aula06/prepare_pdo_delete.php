<?php
$conexao = new pdo('pgsql:host=localhost;dbname=pdo;','barto','1234');

$statement = $conexao->prepare("DELETE FROM  tb_alunos WHERE id = :id");
$statement->execute(array(":id" => 10));


$pessoa = [":id" => 15];
$statement->execute($pessoa);

$alunos = $conexao->query('SELECT * FROM tb_alunos');

$alunos = $alunos->fetchAll(PDO::FETCH_ASSOC);
// $alunos = $alunos->fetch(PDO::FETCH_ASSOC);

echo "<pre>";

/*****************************
var_dump($alunos);
echo "</br>";
print_r($alunos);
******************************/

foreach ($alunos as $key => $aluno) {
	$var = "ID: {$aluno['id']} Nome: {$aluno['nome']} Sobrenome: {$aluno['sobrenome']} Email:{$aluno['email']} </br>";
	echo $var;
}