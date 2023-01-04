<?php include('functions.php'); ?>


<?php 

// ROUTER
	$pageId = "home"; 
	if (isset($_GET["page"]) ){
		$pageId = $_GET["page"]; 
	}


//$pageFilePath = "data/pages/$pageId.json";
//$pageData = null; 
//if (file_exists($pageFilePath) ) {
	//$json = file_get_contents($pageFilePath);
	//$pageData = json_decode($json, true); 
//}
//?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/site.css">
		<title>Lilian's Portfolio</title>
	</head>

	<body class="<?=$pageId?>">
		<inner-column>
			<header class="site-header"> 
			<!-- 	<p><?=queryString();?></p>  -->

				<?php include('templates/partials/site-menu.php');?>
			</header>

			<main>
				<?php renderPageTemplate()?>
			
			</main>

		</inner-column>

	</body>
</html>



