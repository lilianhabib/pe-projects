<?php
// looks for the query string of text ?page=list of ?page=home so base on the query string it can make decisions based on this. If it cannot find the page, it will return home page 
function currentPage() {
	if (isset($_GET["page"]) ) {
		return $_GET["page"]; 
	}else {
		return "home"; 
	}
}

function pageData(){
	$page = currentPage(); //$page is getting the current page (function above) 
	$filePath = "data/pages/$page.json";  //This is building a little string which is also a file path
	$json = file_get_contents("data/pages/$page.json"); //file get content is interacting with the file system 
	if (!$json) {
		$json = file_get_contents("data/pages/404.json"); // get content of the file 
	}
	$pageData = json_decode($json, true); //decoding it
	return $pageData;
}

function renderPageTemplate() {
	$filePath = "templates/pages/" . "standard" . ".php";
	$pageData = pageData(); // data used in template i.e. standard.php, page-header.php. 
	if (file_get_contents($filePath) ) {
		include($filePath);
	} else {
		include("pages/404.php"); 
	}
}

