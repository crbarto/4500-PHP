<?php
	echo "<pre>";

	// While ==> enquanto
	echo "<br> while <br>";
	$x = 0;
	while ($x <= 10) {
		echo $x."<br>";
		$x ++;
	}

	// Do While
	echo "<br>do while <br>";
	$x = 10;
	do {
		echo $x."<br>";
		$x --;
	} while ( $x >= 0);

	// for 
	echo "<br>FOR<br>";
	for ($x=0; $x < 10 ; $x++) { 
		echo $x."<br>";
	}
?>
