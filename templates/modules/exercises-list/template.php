<?php 
    $json = file_get_contents('data/exercises-data.json'); 
    $exercises = json_decode($json, true); 
?> 


<section class=''>
    <inner-column>
        <exercises> 
            <ul> 
            	<?php foreach ($exercises as $exercise) {
            		$slug = $exercise["slug"];
            		$title = $exercise["title"];
            		?>

            		<h1><?=$exercise["title"]?></h1>
	            	<p><?=$exercise["intro"]?></p>
	            	<p><?=$exercise["conclusion"]?></p>
	            	<a href="?page=exercise&slug=<?=$slug?>">Visit <span><?=$title?></span></a>

            	<?php } ?>
            </ul>
        </exercises>
</section>
