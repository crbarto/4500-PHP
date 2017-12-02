<?php
/*
	if (!isset($_GET['route']))
	{
		$_GET['route'] = 'home';
	}
*/
	if (!isset($_GET['route']))
	{

		$_GET['route'] = 'home';

	}

	switch ($_GET['route']) {
		case 'home':
			echo "<h1>Home</h1>";
			break;
		case 'banners':
			header("Location:banners.php");
			break;	
		case 'banners_create':
			header("Location:banners_create.php");
			break;

		default:
			# code...
			break;
	}