<?php

namespace src;

trait Mensagem
{

	public function salvaMsg($class,$strong,$text)
	{
	    if (!isset($_SESSION["msg"]))
	    {
	    	$_SESSION['class'] = "";
	    	$_SESSION['strong'] = "";
	    	$_SESSION['text'] = "";

	    }
	    	$_SESSION['class'] = $class;
	    	$_SESSION['strong'] = $strong;
	    	$_SESSION['text'] = $text;
	}

	public static function exibiMsg()
	{
		$msg = "";
		if (isset($_SESSION['text'])) {
		    $class  = $_SESSION['class'];
		    $strong = $_SESSION['strong'];
		    $text   = $_SESSION['text'];
			$msg = "<div class='alert alert-{$class}'><strong>{$strong}</strong>{$text}</div>";
	    	// Destroi a sessao
			session_destroy();
		}
		return $msg;
	}

}
