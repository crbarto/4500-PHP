<?php
	function local_url($pag){
		if (basename($_SERVER['PHP_SELF']) == $pag) {
			return true;
		}
		else {
			return false;
		}
	}

	function url_active($pag){
		if (basename($_SERVER['PHP_SELF']) == $pag) {
			return "active" ;
		}
		else {
			return "";
		}
	}

?>
