<?php

	if (!isset($_GET['route']))
	{
		$_GET['route'] = 'home';
	}

	switch ($_GET['route']) {
		case 'home':
			echo "<h1>Home</h1>";
			break;

		case 'banners':
			header("Location:home.php");
			break;
		
		default:
			# code...
			break;
	}