<?php 

 	$name= "";
	$address = "";
	$wifi = ""; 
	$busy = ""; 
	$file = ""; 

	$nameError = false;
	$addressError = false;
	$wifiError = false;
	$busyError = false; 
	$fileError = false; 

		if (isset($_POST['submitted']) ) {
			if (isset ($_POST["name"]) ) {
				$name = $_POST["name"]; 
			}

			if (isset ($_POST["address"]) ) {
				$address = $_POST["address"]; 
			}

			if (isset ($_POST["wifi"]) ) {
				$wifi = $_POST["wifi"];
			}


			if (isset ($_POST["busy"]) ) {
				$wifi = $_POST["busy"]; 
			}

	echo "<p class='message'>Thank you for filling in the form. Please wait 3-4 business days to verify the cafe information.</p>";
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

	<field>
		<label>Address</label>
		<input type="address" name="address"value="<?=$address?>" placeholder="Cafe Address"> 
		<?php if ($addressError) { ?>
			<p class="error"><?=$addressError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Wifi is Available</label>
			<select class='wifi' name='wifi'>
				<option value='<?=$wifi?>'>Select</option>
				<option value="<?=$wifi?>">Yes</option>
				<option value="<?=$wifi?>">No</option>
			</select>
		<?php if ($wifiError) { ?>
			<p class="error"><?=$wifiError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Is it busy?</label>
			<select class='busy' name='busy'>
				<option value='<?=$busy?>'>Select</option>
				<option value="<?=$busy?>">Yes</option>
				<option value="<?=$busy?>">No</option>
			</select>
		<?php if ($busyError) { ?>
			<p class="error"><?=$busyError?></p>
		<?php } ?>
	</field>

	<field>
		<label>Image Upload</label>
		<input type="file" class='file' name="file"value="<?=$file?>" placeholder="Cafe Address"> 
		<?php if ($addressError) { ?>
			<p class="error"><?=$fileError?></p>
		<?php } ?>
	</field>




	<button type="submit" name="submitted" class="button">Submit</button>


</form>















	<!-- // $cafeData = file_get_contents("cafe.json");
	// var_dump($cafeData);

	$name= "";
	$address = "";
	$wifi = ""; 
	$busy = ""; 
	$file = ""; 

	$hasName = false;
	$hasAddress = false; 
	$hasWifi = false; 
	$hasBusy = false;
	$hasFile = false;

	$nameError = false;
	$addressError = false;
	$wifiError = false;
	$busyError = false; 
	$fileError = false; -->




	<!-- $formSubmitted = isset($_POST["submitted"]); 

if (isset ($_POST["name"]) ) {
				$name = $_POST["name"]; 
				
				// if (strlen($name) > 0 ) {
				// 	$hasName = true;

					
				// 	//Create cafe name 

				// 	$newCafe = [
				// 		"name" => $name, 
				// 	];

				// 	var_dump($newCafe);

				
				// 	$cafe_Json = json_encode($newCafe); 

				// 	// save json
				// 	file_put_contents('cafe.json', $cafe_Json);



				// } else {
				// 	$nameError = "Please fill in."; 
				// }
		
			}

			// address 

			if (isset ($_POST["address"]) ) {
				$address = $_POST["address"]; 
					
				// if (strlen($address) > 0 ) {
				// 	$hasAddress = true;


				// 	//Create cafe address 

				// 	$newAddress = [
				// 		"address" => $address,
				// 	];

				// 	var_dump($newAddress);

				// 	$cafe_Json = json_encode($newAddress);

				// 	//Save json
				// 	file_put_contents ('cafeAddress.json', $cafe_Json);

				// } else {
				// 	$addressError = "Please fill in.";
				// }
			
		
			}
			// wifi

			if (isset ($_POST["wifi"]) ) {
				$wifi = $_POST["wifi"]; 
				
				// if (strlen($wifi) > 0 ) {
				// 	$hasWifi = true;

				// 	$newWifi = [
				// 		"wifi" => $wifi,
				// 	];

				// 	var_dump($newWifi); 

				// 	$cafe_Json = json_encode($newWifi); 

				// 	file_put_contents ("cafeWifi.json", $cafe_Json); 

				// } else {
				// 	$wifiError = "Please fill in."; 
				// }
		
			}


			if (isset ($_POST["busy"]) ) {
				$wifi = $_POST["busy"]; 
				
				// if (strlen($busy) > 0 ) {
				// 	$hasBusy = true;

				// 	$newBusy = [
				// 		"busy" => $busy,
				// 	];

				// 	var_dump($newBusy); 

				// 	$cafe_Json = json_encode($newBusy); 

				// 	file_put_contents ("cafeBusy.json", $cafe_Json); 

				// } else {
				// 	$busyError = "Please fill in."; 
				// }
		
			}


			// if ($hasName && $hasAddress && $hasWifi) {
			// 	$cafe = [
			// 		$name => $_POST["name"], 
			// 		$address => $_POST["address"],  
			// 		$wifi => $_POST["wifi"], 
			// 		$busy => $_POST["busy"], 
			// 	]; 
			// } else {
			// 	$busyError = "Please fill in."; 
			// 	$wifiError = "Please fill in."; 
			// 	$addressError = "Please fill in.";
			// 	$nameError = "Please fill in.";


			// }

				echo "<p class='message'>Thank you for filling in the form. Please wait 3-4 business days to verify the cafe information.</p>"
		}
		


?>










 -->