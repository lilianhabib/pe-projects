<!--<style>
	
	h1{
		font-size: 25px;
		text-align: center;
		color: peachpuff;
	}

	h2{
		font-size: 12.5px;
	}

	.field{
		display: flex;
		flex-direction: column;
	}

	form{
		max-width: 500px;
		border: 2px solid lightseagreen;
		padding: 10px;
	}

	label, input, button{
		padding: 10px;
	}

	label{
		padding-left: 0;
	}

	input{
		font-family: serif;
	}

	button{
		display: flex; 
		flex-direction: row; 
		justify-content: center;
		align-items: center;
		margin-top: 20px;
	}

	.question{
		display: flex; 
		flex-direction: row; 
		gap: 10px;
	}

	.message{
		color: paleturquoise;
		font-size: 20px;
		font-weight: bold;
	}

</style>


<?php
	


	if (isset ($_POST['submitted']) ){

		if (isset ($_POST["name"])) {
			$name = $_POST ["name"]; 
		}

		if (isset ($_POST["email"])) {
			$email = $_POST ["email"]; 
		}

		if (isset ($_POST["number"])) {
			$number = $_POST ["number"]; 
		}

		if (isset ($_POST["attending"])){
			$attending = $_POST ["attending"]; 
		}
	}
	
		echo "<p class='message'>You have submitted</p>"; 
?>


<form method="POST">
	
	<h1>Guest List</h1>

	<div class='field'> 
		<label>Name</label>
		<input type='text' name="name" value="<?=$name?>" required>
	</div>

	<div class="field"> 
		<label>Email</label>
		<input type="email" name="email" value="<?=$email?>" required> 
	</div>

	<div class="field">
		<label>Phone Number</label>
		<input type="tel" name="number" value="<?=$number?>">
	</div>

	<div class="question">
		<h2>Are you attending?</h2>
		<label>Yes</label>
		<input type="radio" name="attending" value="<?=$attending?>">
		<label>No</label>
		<input type="radio" name="attending" value="<?=$attending?>"> 
	</div>

	<button type="submit" name="submitted">Submit</button>

</form> -->

<style>
	
	h1{
		color: lightseagreen;
		font-family: Avenir;
		text-align: center;
	}

	input, label, button{
		padding: 5px; 
	}

	form{
		border: 2px solid lightskyblue;
		max-width: 600px;
	}

	.field{
		display: block;
		padding: 10px;
		display: flex;
		flex-direction: column;
		max-width: 400px;
	}

	label{
		max-width: 200px;
		padding-left: 0;
	}

	button{
		margin-left: auto; 
		margin-right: auto;
	}


</style>

<form method='POST'>
	
	<h1>Student Information</h2>

	<div class='field'>
		<label>First Name</label>
		<input type="text">
		<label>Last Name</label>
		<input type="text" required> 
	</div>

	<div class='field'>
		<label>Phone Number</label>
		<input type="tel" required> 
	</div>

	<div class='field'>
		<label>Date of Birth</label>
		<input type = "date" max="2017-12-31" required> 
	</div>

	<div class='field'>
		<label>Grade</label>
		<select name="grade" required>
			<option value="K">K</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
		</select>	
	</div>

	<button type='submit' name='submitted' required>Submit</button>
</form>



<?php 

	$name = ""; 
	$number = ""; 
	$email = ""; 
	$address = ""; 
	$people = ""; 
	
	if (isset($_POST["submitted"])) {

		if (isset($_POST["name"])) {
			$name = $_POST["name"]; 
		}

		if (isset($_POST["number"])){
			$number = $_POST["number"]; 
		}

		if (isset($_POST["email"])){
			$email = $_POST["email"];
		}

		if (isset($_POST['address'])){
			$address = $_POST["address"]; 
		}

		if (isset ($_POST["pickup"])){
			$pickup = $_POST ["pickup"]; 
		}

		if (isset ($_POST["people"])){
			$people = $_POST["people"]; 
		}

	}

	echo "<p>Thank you submitting the form</p>"; 

?>




<form method="POST">
	
	<h1>Cake form</h1>

	<div class='field'> 
		<label>Full Name</label>
		<input type="text" name="name" value="<?=$name?>">
	</div>

	<div class="field"> 
		<label>Number</label>
		<input type="tel" name="number" value="<?=$number?>">
	</div>

	<div class="field">
		<label>Email</label>
		<input type="email" name="email" value="<?=$email?>"> 
	</div>

	<div class="field">
		<label>Address</label>
		<input type="text" name="address" value="<?=$address?>"> 
	</div>

	<div class="field">
		<label>Pick-Up or delivery date</label>
		<input type="datetime-local" name="pickup" value="<?=$pickup?>" required>  
	</div>

	<div class="field">
		<label>Number of People</label>
		<input type="number" name="people" min="0" value="<?=$people?>">  
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>





