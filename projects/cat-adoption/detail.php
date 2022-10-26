
<?php include ('adoption_data.php'); ?>


<?php
	if (isset($_GET["name"])){
		$cat_name = $_GET["name"]; 
	}

	echo $cat_name; 

	foreach ($adoption_data as $adoption){
		echo $adoption["name"];
	}

?>

<picture> 
	<img src="https://peprojects.dev/images/square.jpg" class="cat-img" alt='$todo'> 
</picture>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<a href="form.php">Adopt</a>





