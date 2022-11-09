
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
		
	<!-- 	<?php echo queryString();

		?> -->
			<header>
				<inner-column> 
					<?php include ('site-menu.php')?>
				</inner-column>
			</header>

			<main class='page-content'>
				<inner-column>

					<?php getTemplate($page); ?>
				</inner-column>

			</main>
	</body>
</html>