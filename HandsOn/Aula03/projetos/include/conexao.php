<?php

	$host = "localhost";
	$port = "5432";
	$dbname = "aula04";
	$user = "barto";
	$password = "1234";
	$conection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

//	$con = pg_connect($conection_string);
	var_dump($conection_string);



?>