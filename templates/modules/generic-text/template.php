<?php 

$heading = $section["heading"] ?? "default text heading";
$copy = $section["copy"] ?? "default text copy";
$image = $section["image"] ?? "<img src='https//:www.peprojects.dev/";

?>


<section class=''>
	<inner-column> 

		<generic-text> 

	
			<text-content> 
				<h1 class='loud-voice'><?=$section["heading"]?></h1>

				<p class='calm-voice'><?=$section["copy"]?></p>
			</text-content>
	
		
			<picture> 
				<img src="<?=$section['image']?>">
			</picture>

			

			<div class="page-links"> 

				<a href="<?=$section['link1']?>" class='page-link'>Resume</a>

				<a href="<?=$section['link2']?>" class='page-link'>Contact</a>

			</div>

		</generic-text>

	</inner-column>
</section>
