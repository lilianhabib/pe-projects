
<?php 
    $json = file_get_contents('data/exercises-data.json'); 
    $exercises = json_decode($json, true); 


    $pageId = "home"; 
        if (isset($_GET["page"]) ){
            $pageId = $_GET["page"]; 
        }
?> 



<section class='<?=$pageId?>'>
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

                    <section class="exercise-section"> 
                        <text-content> 
                    		<h2 class='bold-voice'><?=$exercise["title"]?></h2>
                            <br>
        	            	<a href="?page=exercise&slug=<?=$slug?>" class='exercise-link'>Visit <span><?=$title?></span></a>
                        </text-content>
                        

                    </section>

            	<?php } ?>
            </ul>
        </exercises-list>
</section>
