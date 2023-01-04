<?php 

	$json = file_get_contents("data/contact-data.json"); 
	$contacts = json_decode($json, true); 

?>


<section class='<?=$pageId?>'>
	<inner-column> 

		<div class="page-links"> 

                <a href="mailto:lilianslku@gmail.com" class='page-link'>Email</a>

                <a href="https://calendly.com/liliankuhabib/30min" target="_blank" class='page-link'>Google Meet</a>

        </div> 

		<contact-list> 

			<?php foreach ($contacts as $contact) { 
				$heading = $contact["heading"]; 
				$copy = $contact["copy"]; 
		
			?>
				<div class='info'> 
					<p class="normal-voice"><?=$copy?></p>
	
				</div>
			<?php } ?> 
			
				
		</contact-list>

	</inner-column>
</section>