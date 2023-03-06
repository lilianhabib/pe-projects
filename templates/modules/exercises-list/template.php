
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

            <ul class='list'> 
            	<?php foreach ($exercises as $exercise) {
            		$slug = $exercise["slug"];
            		$title = $exercise["title"];
            		?>

                    <section class="exercise-section"> 
                        <text-content> 
                    		<h2 class='bold-voice'><?=$exercise["title"]?></h2>
                            <br>
                        </text-content>
                        <exercises-links>
                            <a href="?page=exercise&slug=<?=$slug?>" class='exercise-link'>PHP</a>
                             <a href="?page=exercise-vue&slug=<?=$slug?>" class='exercise-link'>Vue.js</a>
                        </exercises-links>
                        

                    </section>

            	<?php } ?>
            </ul>
        </exercises-list>
</section>
