
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo wp_get_document_title(); ?></title>

		<?php wp_head(); ?>
	</head>


	<body <?php body_class();?>>

		<header>
			<inner-column> 
				<h1 class='bold-voice'>Hakka Bites</h1>


				<?php include('templates/components/site-menu.php');?>
			</inner-column>
		</header>

		<main class='page-content'>


	
