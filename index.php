
<?php include('functions.php'); ?>


<?php 

// ROUTER
	$pageId = "home"; 
	if (isset($_GET["page"]) ){
		$pageId = $_GET["page"]; 
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Lilian Habib">
		<meta name="description" content="A web developer passionate about creating meaningful, responsive, user-accessible, and engaging experiences through digital means.">
		<meta property="og:image" content="https://peprojects.dev/alpha-5/lilian/images/sharelilian.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="styles/site.css" type="text/html" rel='stylesheet' >
		<base href='<?=BASE_URL?>'>
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


	<footer class="<?=$pageId?>" > 
		<inner-column>

			<?php include ('templates/partials/footer.php') ?>

			
		</inner-column>

	</footer>
	<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>

		
</html>


