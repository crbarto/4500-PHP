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
$statement->execute(array(":id" => 12,
						":nome" => "Bob",
						":email" => "bob@hotmail.com",
						":sobrenome" => "Esponja"));

$statement->execute(array(":id" => 13,
						":nome" => "Bob",
						":email" => "bobconst@hotmail.com",
						":sobrenome" => "Contrutor"));

$statement->execute(array(":id" => 14,
						":nome" => "Jay",
						":email" => "jayb@hotmail.com",
						":sobrenome" => "Jay"));

$pessoa = [
			":id" => 15,
			":nome" => "Caverna",
			":email" => "caverna@hotmail.com",
			":sobrenome" => "Dragao"
];
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