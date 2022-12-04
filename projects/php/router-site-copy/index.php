<?php include('functions.php'); ?>

<?php 

$pageId = "home"; 
if (isset($GET["page"]) ){
	$pageId = $_GET["page"];
}

echo $pageId; 

if ($pageId == "home") {
	$json = file_get_contents('data/pages/home.json'); 
	$pageData = json_decode($json, true); 
}

if ($pageId == "projects") {
	$json = file_get_contents("data/projects.json"); 
	$projectsData = json_decode($json, true); 
}

if ($pageId == "project") {
	$json = file_get_contents("data/projects.json"); 
	$projectsData = json_decode($json, true); 
	foreach ($projectsData as $project) {
		if ($project["id"] == $_GET["id"]) {
			$projectData = $project; 
		}
	}
}
?>

<header class='site-header'>
	<p><?=queryString();?></p>

	<?php include('templates/partials/site-menu.php');?>

</header>

<?php renderPageTemplate()?>


<!-- page content  -->

<?php 

if ($pageId == "home") {
	include ('templates/pages/home.php'); 
}

if ($pageId == "projects") {
	include ('tempaltes/pages/projects.php'); 
}


?>