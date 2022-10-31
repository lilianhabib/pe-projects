<?php 

	$cafeData = file_get_contents("cafe.json");
	var_dump($cafeData);
	
	$name= "";

	$hasName = false;
	$nameError = false;

	$formSubmitted = isset($_POST["submitted"]); 

		if ($formSubmitted) {

			if (isset ($_POST["name"]) ) {
				$name = $_POST["name"]; 
				
				if (strlen($name) > 0 ) {
					$hasName = true;

					

					
					//Create cafe

					$newCafe = [
						"name" => $name, 
					];
					var_dump($newCafe);

				
					$cafe_Json = json_encode($newCafe); 

					// save json
					file_put_contents('cafe.json', $cafe_Json);



				} else {
					$nameError = "Please add a cafe name"; 
				}
		
			}

		}
	
?>

<h1 class="loud-voice">Add a Java</h1>

<form method="POST">
	<field>
		<label>Cafè Name</label>
		<input type="text" name="name" value="<?=$name?>" placeholder="Name of the Cafè">
		<?php if ($nameError) { ?>
			<p class="error"><?=$nameError?></p>
		<?php } ?>
	</field>


	<button type="submit" name="submitted" class="button">Submit</button>


</form>












