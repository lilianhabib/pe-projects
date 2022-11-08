
<?php 
	
	if (isset($_POST['submitted']) ) {
		if (isset ($_POST ['name'])) {
			$name = $_POST['name']; 
		}

		if (isset($_POST['email'])) {
			$email = $_POST['email']; 
		}

		if (isset ($_POST['age']) ) {
			$age = $_POST['age']; 
		}

		if (isset ($_POST['challenges'])) {
			$challenges = $_POST['challenges']; 
		}

		if (isset ($_POST['skin_care'])) {
			$skin_care = $_POST["skin_care"];
		}

		if (isset($_POST['skin_type'])){
			$skin_type = $_POST["skin_type"]; 
		}

	echo "<p class='message'>Thank you for submitting! You will recieve an email with the results within a week.</p>";
	}

?>

<form method="POST">

	<div class='fields'>
		<label>Full Name</label>
		<input type='text' name='name' class='text'>  
	</div>

	<div class='fields'>
		<label>Email</label>
		<input type='email' name='email' class='text'>  
	</div>

	<div class='fields'>
		<label>Age</label>
		<input type='number' name='age' min='15' class='text'>  
	</div>

	<div class='fields'>
		<label class='goal-label'>What are your skin care goals?</label>
		<textarea type='textarea' name='age' class='goals'></textarea>  
	</div>

	<div class='fields'>
		<h2 class='challenges'>What are your skin care challenges?</h2>
	</div>

	<div class='fields'> 
		<input type='checkbox' name='challenges' class='challenges'> 
		<label class='challenges'>Wrinkles/Fine Lines</label>	
	</div>

	<div class='fields'> 
		<input type='checkbox' name='challenges' class='challenges'>
		<label class='challenges'>Hyperpigmentation/Sun Damage</label>	
		
	</div>

	<div class='fields'>
		<input type='checkbox' name='challenges' class='challenges'> 
		<label class='challenges'>Acne/Acne Scarring</label>
	</div>

	<div class='fields'>
		<input type='checkbox' name='challenges' class='challenges'> 
		<label class='challenges'>Redness/Rosacea</label>
	</div>

	<div class='fields'>
		<input type='checkbox' name='challenges' class='challenges'>
		<label class='challenges'>Aging</label> 
	</div>

	<div class='fields'>
		<input type='checkbox' name='challenges' class='challenges'> 
		<label class='challenges'>Melasma</label>
	</div>

	<div class='fields'> 
		<input type='checkbox' name='challenges' class='challenges'>
		<label class='challenges'>Sensitivity</label>	
 
	</div>

	<div class='fields'> 
		<input type='checkbox' name='challenges'>
		<label>Other</label>
		<input type='text' name='other' class='text'> 				 
	</div>

	<div class='fields'>
		<h2>What skin care products do you currently use?</h2>
	</div>

	<div class='fields'>
		<input type='checkbox' name='skin_care'> 
		<label>Cleanser/Face Wash</label>	
	</div>

	<div class='fields'>
		<input type='checkbox' name='skin_care'> 
		<label>Bar Soap</label>	
	</div>

	<div class='fields'> 
		<input type='checkbox' name='skin_care'> 
		<label>Face Scrub/Exfoliants</label>
	</div>

	<div class='fields'>
		<input type='checkbox' name='skin_care'> 
		<label>Toner</label>	
	</div>

	<div class='fields'>
		<input type='checkbox' name='skin_care'>  
		<label>Serum</label> 
	</div>

	<div class='fields'> 
		<input type='checkbox' name='skin_care'>
		<label>Moisturizer</label>
	</div>

	<div class='fields'> 
		<input type='checkbox' name='skin_care'>
		<label>Sunscreen</label>	
	</div>

	<div class='fields'> 
		<input type='checkbox' name='skin_care'>
		<label>Eye Products</label>	
	</div>

	<div class='fields'> 
		<input type='checkbox' name='skin_care'>
		<label>Lip Products</label>	
	</div>

	<div class='fields'> 
		<input type='checkbox' name='skin_care'>
		<label>Other</label>
		<input type='text' name='other' class='text'> 			 
	</div>

	<div class='fields'>
		<label for="skin-type">What is your skin type?</label>
			<select id="skin_type" name="skin_type" class='skin_type' placeholder='select'>
				<option value="select">Select</option>
				<option value="dry">Dry</option>
				<option value="oily">Oily</option>
				<option value="combination">Combination (Dry/Oily)</option>
				<option value="audi">Normal</option>
			</select>
		</label>
	</div>

	<button type='submit' name='submitted' class='submitted'>Submit</button>
</form>








