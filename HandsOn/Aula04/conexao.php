<?php

	$host = "localhost";
	$port = "5432";
	$dbname = "aula04";
	$user = "barto";
	$password = "1234";
	$conection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

	$con = pg_connect($conection_string);

	$nome = "Jhony Love";
	$email = "jlove@sexy.com.br";
	$senha = "jlov103020";
	$cpf = "00981098216";
	$rg = "JLV091011";

/*
	$strSQL = "INSERT INTO tb_alunos(
										nome,
										email,
										senha,
										cpf,
										rg) 
										VALUES (
										'$nome',
										'$email',
										'$senha',
										'$cpf',
										'$rg'
										)";
	pg_query($con,$strSQL);
*/
	$resultado = pg_query("SELECT * FROM tb_alunos");
	echo "<pre>";
	var_dump($resultado);

	$alunos = pg_fetch_all($resultado);
	$aluno1 = pg_fetch_array($resultado);
	$aluno2 = pg_fetch_assoc($resultado);
	$aluno3 = pg_fetch_assoc($resultado);

	echo "alunos";
	var_dump($alunos);
	echo "<hr>";
	var_dump($aluno1);
	echo "<hr>";
	var_dump($aluno2);
	echo "<hr>";
	var_dump($aluno3);

	echo "<hr>";
	echo "while</br>";
	while ($row = pg_fetch_assoc($resultado)){
		var_dump($row);
		echo "</br>";
	}




/*
	$query = "DELETE FROM tb_alunos WHERE id = 7";

	pg_query($con,$query);


	$query = "DELETE FROM tb_alunos WHERE id = 10";

	pg_query($con,$query);
*/
	

	var_dump($con);

	pg_close($con);


?>