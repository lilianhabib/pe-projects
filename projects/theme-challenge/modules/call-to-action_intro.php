<call-to-action_intro> 


	<header>

		<h2 class='attention-voice'>Popular Products</h2>

	</header>

	<call-to-action-grid> 
		<?php include ('call-to-action_data.php'); ?>


	    <?php foreach ($products as $product) { ?> 
	      <?php include ('call-to-action.php'); ?>
	    <?php } ?>
			
	</call-to-action-grid>

</call-to-action_intro>