<!DOCTYPE html>

<?php include("templates/partials/header.php");?>

	<main> 

		<?php 
			$json = file_get_contents('data/module-data.json');
			$moduleData = json_decode($json, true); 
		?>
		<?php foreach ($moduleData as $module) {
				$heading = $module['heading']; 
				$intro1 = $module["intro1"]; 
				$type = $module["type"]; 
				$intro2 = $module["intro2"];
				$image = $module['image'];


			include ('templates/modules/hero/hero.php'); 
			include ('templates/modules/center-content/center-content.php'); 
			include ('templates/modules/feature/feature.php');
			include ('templates/modules/clients/client.php');
			include ('templates/modules/call-to-action/call-to-action.php');
			include ('templates/modules/faqs/faqs.php');
	
		} ?>
		

	
	</main> 

	<script src='wireframe.js' type="text/javascript"></script>

</body>


<footer> 
	<inner-column> 
		<?php include ('templates/partials/footer.php') ?>
	</inner-column>
</footer>