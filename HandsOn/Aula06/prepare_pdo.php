<?php
$conexao = new pdo('pgsql:host=localhost;dbname=pdo;','barto','1234');

$statement = $conexao->prepare("insert into tb_alunos(
														id,
														nome,
														email,
														sobrenome
														) values (
														:id,
														:nome,
														:email,
														:sobrenome)
										");
$statement->execute(array(":id" => 9,
						":nome" => "Jiraya",
						":email" => "jiraya@hotmail.com",
						":sobrenome" => "Anime"));

$statement->execute(array(":id" => 10,
						":nome" => "Arnold",
						":email" => "aschw@hotmail.com",
						":sobrenome" => "Schuwasnegger"));

$statement->execute(array(":id" => 11,
						":nome" => "Rocky",
						":email" => "rockyb@hotmail.com",
						":sobrenome" => "Balboa"));
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