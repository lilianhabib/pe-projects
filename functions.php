<?php 

function queryString() {
	$query = $_SERVER ["QUERY_STRING"]; 
	echo $query; 
}

function currentPage() {
	if (isset($_GET["page"]) ) {
		return $_GET["page"];
	} else {
		return "home";
	}
}

function pageData() {
	$page = currentPage(); 
	$filePage = "data/pages/$page.json"; 
	$json = file_get_contents("data/pages/$page.json"); 

	if (!$json) {
		$json = file_get_contents("data/pages/404.json"); 
	}
	$pageData = json_decode($json, true); 
	return $pageData;
}

function renderPageTemplate() {
	$pageData = pageData();
	$page = currentPage(); 
	$filePath = "templates/pages/standard.php";
	$filePage = "data/pages/$page.json"; 

	
	if (isset($pageData["template"])) {
		$filePath = "templates/pages/$pageData[template].php";
		} 

	if (file_get_contents($filePath)){
		include($filePath);	
		
	} else {
		include ("templates/pages/404.php");
	}

}


