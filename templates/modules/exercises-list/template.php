
<?php 
    $json = file_get_contents('data/exercises-data.json'); 
    $exercises = json_decode($json, true); 

?> 



<section class=''>
    <inner-column>

        <div class="page-links"> 

            <a href="?page=layouts" class='page-link'>Responsive Layout Garden</a>

            <a href="?page=projects" class='page-link'>Projects</a>

        </div> 

        <exercises-list> 
            <ul> 
            	<?php foreach ($exercises as $exercise) {
            		$slug = $exercise["slug"];
            		$title = $exercise["title"];
            		?>

                    <section class="exercise"> 
                        <text-content> 
                    		<h2 class='lazy-voice'><?=$exercise["title"]?></h2>
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
