
<?php 
    $json = file_get_contents('data/exercises-data.json'); 
    $exercises = json_decode($json, true); 

?> 



<section class=''>
    <inner-column>
        <exercises-list> 
            <ul> 
            	<?php foreach ($exercises as $exercise) {
            		$slug = $exercise["slug"];
            		$title = $exercise["title"];
            		?>

                    <section class="exercise"> 
                        <text-content> 
                    		<h2 class='tall-voice'><?=$exercise["title"]?></h2>
        	            	<p><?=$exercise["intro"]?></p>
        	            	<p><?=$exercise["conclusion"]?></p>
        	            	<!-- <a href="?page=exercise&slug=<?=$slug?>">Visit <span><?=$title?></span></a> -->
                        </text-content>
                         <div class='form'> 
                            <?php include ("exercises/$slug.php");?>
                        </div>

                    </section>

            	<?php } ?>
            </ul>
        </exercises-list>
</section>
