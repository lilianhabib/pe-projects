
<?php 
    $json = file_get_contents('data/exercises-data.json'); 
    $exercisesJson = json_decode($json, true); 

    foreach ($exercisesJson as $thatExercise) {
        if ($thatExercise["slug"] == $_GET["slug"]) {
            $chosenExercise = $thatExercise; 
        }
    }
    $title = $chosenExercise["title"]; 
    $intro = $chosenExercise["intro"]; 
    $copy = $chosenExercise["copy"]; 
    $conclusion = $chosenExercise["conclusion"]; 
    $slug = $chosenExercise["slug"];

   
?> 

<section class=''> 
    <inner-column>

        <project-detail> 

            <h1><?=$title?></h1>
            <p><?=$intro?></p>
            <p><?=$copy?></p>
            <p><?=$conclusion?></p>
            <p><?=$slug?></p>
            <div class='form'> 
                <?php include ("exercises/$slug.php");?>
            </div>
            
    
        </project-detail>

    </inner-column>
</section>

