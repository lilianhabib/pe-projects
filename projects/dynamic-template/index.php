
	<?php require ('router.php'); ?>
	<?php
	function queryString() {
		return $_SERVER['QUERY_STRING'];
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/site.css">
		<title><?=$page?></title>
	</head>
	<body class='<?=$page?>'>
		<inner-column> 
	<!-- 	<?php echo queryString();

		?> -->
			<header>
				<?php include ('site-menu.php')?>
			</header>

			<main class='page-content'>

				<?php getTemplate($page); ?>

			</main>
		</inner-column>
	</body>
</html>