
<link rel="stylesheet" href="practice-styles.css">

<?php include ('practice-data.php'); ?>

<h2>Favourite Dishes</h2>

<dish-list>


<?php 
		function vegBanner ($vegetarian){
			if ($vegetarian) {
				return "<p class='sign'>It is vegetarian</p>";
			}
		}

?>



	<?php foreach ($dishes as $dish) { ?>

		<dish-grid>
			<p class='dish'><?=$dish["name"]?></p>
			<ol>
				<li class='ingredients'><?=$dish["ingredient"][0]?></li>
				<li class='ingredients'><?=$dish["ingredient"][1]?></li>
				<li class='ingredients'><?=$dish["ingredient"][2]?></li>
				<li class='ingredients'><?=$dish["ingredient"][3]?></li>
			</ol>
			<?=vegBanner($dish["vegetarian"])?>

		</dish-grid>
	<?php } ?>
</dish-list>



<?php
	echo $dish["ingredients"][0];

?>
