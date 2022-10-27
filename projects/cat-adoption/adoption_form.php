


<?php 
	if (isset($_POST["submitted"]) ){


		if (isset ($_POST["name"]) ){
			$name = $_POST["name"]; 
		}

		if (isset ($_POST["cat"]) ){
			$cat = $_POST ["cat"]; 
		}

		if (isset ($_POST["email"]) ){
			$email = $_POST ["email"]; 
		}

		if (isset ($_POST["number"]) ){
			$number = $_POST ["number"]; 
		}

		if (isset ($_POST["street"]) ){
			$street = $_POST["street"]; 
		}

		if (isset ($_POST ["city"]) ){
			$city = $_POST["city"]; 
		}

		if (isset ($_POST["state"]) ){
			$state = $_POST["state"]; 
		}

		if (isset ($_POST["zip"]) ){
			$zip = $_POST["zip"]; 
		}

		if (isset ($_POST["country"]) ){
			$country = $_POST["country"]; 
		}
	}

	echo "<p>We have received your application. Please expect to wait 2-3 weeks for a response.</p>"

?>





<form method="POST">

	<h1>Adoption Form</h1>

	<div class="field"> 
		<label>Full Name</label>
		<input type="text" name="name" required> 
	</div>


	<div class="field"> 
		<label>Name of Pet You Wish to Adopt</label>
		<input type="text" name="cat" required> 
	</div>


	<div class="field"> 
		<label>Email</label>
		<input type="email" name="email"> 
	</div>

	<div class="field"> 
		<label>Phone Number</label>
		<input type='number' name='number' required> 
	</div>


	<div class='field'> 
		<label>Street</label>
		<input type='street' name="street" placeholder="Street" required> 
	</div>


	<div class='field'> 
		<input type='city' name="city" placeholder="City">  

		<input type="state" name="state" placeholder="State"> 
		<input type="zip" name="zip" placeholder="zip" required> 

	</div>

	<div class='field'> 
		<input type='country' name="country" placeholder="Country" required> 
	</div>

	<div class="field"> 
		<input type="submit" name="submitted" required> 
	</div>

</form>