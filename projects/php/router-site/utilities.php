<?php 

function queryString() {
	$query = $_SERVER ["QUERY_STRING"]; 
	echo $query; 
}


function currentPage() {
	if (isset($_GET["page"]) ) {
		return $_GET["page"]; 
	}else {
		return "home"; 
	}
}

function getPageTemplate() {
	$filePath = "pages/" . currentPage() . ".php";
	if (file_get_contents($filePath) ) {
		include($filePath);
	} else {
		include("pages/404.php"); 
	}
}

