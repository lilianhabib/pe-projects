<?php 

	$json = file_get_contents("data/contact-data.json"); 
	$contacts = json_decode($json, true); 

?>


<section class='<?=$pageId?>'>
	<inner-column> 

		<contact-list> 

				<?php foreach ($contacts as $contact) { 
					$name = $contact["name"]; 
					$connect = $contact["connect"]; 
					$url = $contact["url"]; 
				?>
					<div class='info'> 
						<h2 class="bold-voice"><?=$name?></h2>
						<a href="<?=$url?>" target='_blank' class='small-voice'><?=$connect?></a>
					</div>
				<?php } ?>
			
				
		</contact-list>

	</inner-column>
</section>