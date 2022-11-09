<?php include ("cafe_data.php"); ?>


<a href="?page=list" class='back-link'>Back</a>

<?php 



	if ( isset($_GET["cafe"]) ) {
		$cafe_id = $_GET["cafe"];
	}

	// echo $cafe_id;


	foreach ($cafe_data as $cafe) {
	 	if ($cafe_id == $cafe["name"] ) {
	 		$detail = $cafe; 
	 	} 
	 }
?>
 
<?php if (isset($detail) ) { ?>


	<h1 class='cafe_name'><?=$detail['name']?></h1>


	<div class="cafe_content">
		<picture class="image">
			<img src="<?=$detail['image']?>" alt="$too">
		</picture>

		<p class="description"><?=$detail["cafe-info"]?></p>
	</div>



<?php } else { ?>

	<h1>No cafe found.</h1>
	<p>Check the list for more cafes <a href="?page=list">here</a>
<?php } ?> 


