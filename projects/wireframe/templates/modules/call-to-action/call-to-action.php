<?php if($type == "call-to-action") { ?>

<section class='call-to-action-section'> 
	<inner-column>

		<introduction> 
			<h1 class='heading-voice'><?=$heading?></h1>
			<p class='quiet-voice'><?=$intro1?></p>
		</introduction> 

		<button> 
			<?php foreach($module['components'] as $button) {
					$button = $button['copy']; 
				?>

				<a href='#' class='cta-link small-voice'><?=$button?></a>

			<?php }?>
		</button>

	</inner-column>

</section>
<?php } ?>