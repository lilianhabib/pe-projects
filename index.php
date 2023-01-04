<head> 
		<meta charset="utf-8">
		<meta name="author" content="Lilian Habib">
		<meta name="description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">

		<meta name="viewport" content="width=device-width,initial-scale=1">
	

		<meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/lilian1.png">
		

		<link rel="shortcut icon" href="images/lilian1.png" type="image/png">

		<link rel='stylesheet' href='style.css'>
		
		<!-- font --> 
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Tienne:wght@400;700;900&display=swap" rel="stylesheet">

	
		<!-- Facebook Meta Tags -->
		  <meta property="og:url" content="https://peprojects.dev/alpha-5/lilian/">
		  <meta property="og:type" content="website">
		  <meta property="og:title" content=" index ">
		  <meta property="og:description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">
		  <meta property="og:image" content="https://peprojects.devimages/metalilian.png?hello">

		  <!-- Twitter Meta Tags -->
		  <meta name="twitter:card" content="summary_large_image">
		  <meta property="twitter:domain" content="peprojects.dev">
		  <meta property="twitter:url" content="https://peprojects.dev/alpha-5/lilian">
		  <meta name="twitter:title" content=" index ">
		  <meta name="twitter:description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">
		  <meta name="twitter:image" content="https://peprojects.devimages/metalilian.png">

		<title>Lilian's Website</title>
	</head>  
	
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



