<?php
	function local_url($pag){
		if (basename($_SERVER['PHP_SELF']) == $pag) {
			return true;
		}
		else {
			return false;
		}
	}
?>
