<?php
	function SaltaLinha($tipo = 1){
		if ($tipo == 1) {
			echo "<hr>";	
		} else {
			echo "<br>";
		}
	}
		
		return null;
	}
	function msg_tela ($message){
		echo $message;
	}

//	header('location: http://www.4linux.com.br');
	$_GET['nome'] = 'Claudio';
	$_POST['nome'] = 'Claudio Barto';
	// var_dump($_REQUEST);
	var_dump($_GET);

	SaltaLinha();

	var_dump($_POST);
	SaltaLinha();

    var_dump($_REQUEST);
    SaltaLinha();

    msg_tela("Startando sessoes");
    SaltaLinha(0);

    session_start();

    $_SESSION["login"] = 'Claudio';


?>
