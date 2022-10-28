
<?php include ('adoption_data.php'); ?>

<?php 
	if (isset($_GET["name"]) ) {
		$cat = $_GET["name"]; 
	}
	echo $cat;

	foreach ($adoption_data as $adoption){
		if ($cat == $adoption["name"]) {
			$adopt_detail = $adoption;
		}
	}
?>

<!-- <?php if ( isset($adopt_detail) ) { ?>
 --><h1><?=$adopt_detail["name"]?></h1>

<picture class='cat-img'> 
	<img src="https://peprojects.dev/images/square.jpg" alt='$todo'> 
</picture>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<a href="?page=adoption">Adopt</a>

<?php } else { ?>
	<h1>No cat found</h1>
<?php } ?>



