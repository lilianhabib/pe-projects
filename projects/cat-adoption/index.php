<!DOCTYPE html>

<?php 
	$page = null; 

	if ( isset ($_GET["page"])) {
		$page = $_GET["page"]; //url?page=string
	} else {
		$page == "home"; //default
	}

	function getTemplate($page) {
		include($page . ".php");
	}

?>


<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/site.css">
		<title>Catoption - <?=$page?></title>
	</head>


	<body>

		<header>

			<?php include ('site-menu.php'); ?>

		</header>


		<main class='page-content'>

			<?php 

				getTemplate ($page); 
				// if ($page == "home"){
				// 	include ('home.php');
				// }

				// if ($page == "about"){
				// 	include ('about.php');
				// }

				// if ($page == "adoption_data"){
				// 	include ('adoption_data.php'); 
				// }

				// if ($page == "adoption"){
				// 	include ('adoption.php'); 
				// }

				// if ($page == "faq") {
				// 	include ("faq.php");
				// }

				// if ($page == 'detail'){
				// 	include ("detail.php");
				// }

				// if ($page == "adoption_form") {
				// 	include ("adoption_form.php"); 
				// }
			?>

		</main>


	</body>

</html>