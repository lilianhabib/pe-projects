<?php include ("data.php"); ?>


<?php 
	
	if ( isset($_GET["name"]) ){
		$cafe_id = $_GET["name"];
	}

	echo $cafe_id;


	foreach ($data as $cafe) {
		if ($cafe_id == $cafe["id"] ) {
			$detail = $car; 
		} 
	}

?>


<?php if (isset ($detail) ) { ?>

		<h1 class="detail"><?=$detail["name"]?></h1>

		<picture class="image">
			<img src="https://peprojects.dev/images/landscape.jpg" alt="$too">
		</picture>

		<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>



<?php } else { ?>

	<h1>No car found.</h1>
	<p>Check the list for more cars <a href="?page=list">here</a>
<?php } ?>


