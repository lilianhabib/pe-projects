
<!DOCTYPE html>


<!-- router -->
<?php 
	$page = null;

	if ( isset ($_GET["page"]) ){
		$page = $_GET["page"];
		
	} else {
		 $page = "home";  
	}
?>

<!-- 
	pages: home, lsit, detail
-->
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link ref="stylesheet" href="css/site.css">
		<title><?=$page?></title>
	</head>

	<body>
		<header>
			<?php include ('site-menu.php'); ?>
		</header>

		<main class='page-content'>
			<?php 

				if ($page == 'home') {
					include ('home.php'); 
				}

				if ( $page == "list") {
					include ('list.php'); 
				}

				if ( $page =="contact") {
					include ('contact.php'); 
				}

				if ($page == "faq"){
					include ("faq.php");
				}
		
			?>
		</main>

	</body>
</html>