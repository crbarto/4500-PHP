<?php
$conexao = new pdo('pgsql:host=localhost;dbname=pdo;','barto','1234');

$conexao->exec("insert into tb_alunos(id,nome,email,sobrenome) values (6,'Dragao','dragao@hotmail.com','Branco')");


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