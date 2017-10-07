<?php
	echo "<pre>";

	echo "<br>break<br>";
	for ($i=0; $i <= 10 ; $i++) { 
		echo $i;
		if ($i == 5) {
			break;
		}
	}

	echo "<br>continue<br>";
	for ($i=0; $i <= 10 ; $i++) { 
		if ($i == 5) {
			continue;
		}
		echo $i;
	}

?>