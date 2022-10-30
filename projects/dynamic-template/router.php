<?php 

	$page = "home"; 
	if (isset ($_GET['page']) ) {
		$page = $_GET['page']; 
	}

	function getTemplate($page) {
		include($page . ".php"); 
	}

?>
