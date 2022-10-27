
<?php include ('adoption_data.php'); ?>

<h1>

<?php


	$cat_name = "";
	if (isset($_GET["name"])){
		$cat_name = $_GET["name"]; 
	}

	echo $cat_name; 

	foreach ($adoption_data as $adoption){
		echo $adoption["name"];
	}

?>
</h1>

<!-- <h1><?=$adoption['name']?></h1> -->

<picture class='cat-img'> 
	<img src="https://peprojects.dev/images/square.jpg" alt='$todo'> 
</picture>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<a href="adoption_form.php">Adopt</a>





