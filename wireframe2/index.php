<?php include("templates/partials/header.php");?>

	<main> 

		<inner-column> 


		<?php 
			$json = file_get_contents('data/module-data.json');
			$moduleData = json_decode($json, true); 

			foreach ($moduleData as $module) {
				$heading = $module['heading']; 
				$intro1 = $module["intro1"]; 
				$type = $module["type"]; 
				$intro2 = $module["intro2"];
				$image = $module['image'];
		?>

				<?php include ('templates/modules/hero.php'); ?>

				<?php include ('templates/modules/center-content.php'); ?>
		
			
		<?php } ?>


		</inner-column>
	</main> 



	</body>


	<footer> 
	<inner-column> 
		<?php include ('templates/partials/footer.php') ?>
	</inner-column>
	</footer>