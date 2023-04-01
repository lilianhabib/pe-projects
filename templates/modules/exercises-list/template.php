
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

            <a href="layouts" class='page-link'>Responsive Layout Garden</a>

            <a href="works" class='page-link'>Work</a>

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
                            <a href="exercise/<?=$slug?>" target='_blank' class='exercise-link'>PHP</a>
                             <a href="exercise-vue/<?=$slug?>" target='_blank' class='exercise-link'>Vue.js</a>
                        </exercises-links>
                        

                    </section>

            	<?php } ?>
            </ul>
        </exercises-list>
</section>
