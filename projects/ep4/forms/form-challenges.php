
<style>

	
	*{
		background-color: lightblue;
	}
	h1{
		color: lightseagreen;
		font-size: 20px;
		font-family: avenir;
		text-align: center;
	} 

	form{
		border: 2px solid lightgoldenrodyellow;
		padding: 5px;
		max-width: 500px;
		margin:  10px;
	}

	.fields{
		display: flex;
		flex-direction: column;
		max-width: 500px;
	}

	label, input, button{
		padding: 5px; 
	}

	input{
		margin-top: 10px;
		border: 1px solid lightslategray;
	}
	button{
		margin-top: 10px;
		display: flex; 
		flex-direction: row;
		justify-content: center;
		margin-left: auto;
		margin-right: auto;
		border: 1px solid lightslategray;
	}

</style>	

<?php
	
	$string = ""; 

	if (isset ($_POST["submitted"]) ){

		if (isset($_POST["string"]) ) {
			$string = $_POST["string"];
		}
	}
	echo $string . ' has ' . strlen($string) . ' characters.';



	
?>



<form method="POST"> 

	<h1>Counting the Number of Characters</h1>

	<div class="field">
		<label>Type in a word</label>
		<input type='text' name="string" required>  
	</div>

	<button type="submit" name="submitted">Push Me</button>

</form>



<?php
// SETUP
	$name = ""; 

	$greeting = ""; 


	// USER INPUT
	if (isset($_POST['submitted'])){

		if (isset($_POST["name"])){
			$name = $_POST["name"];
		}

		if (isset ($_POST["greeting"])){
			$greeting = $_POST["greeting"]; 
		}

	}


// CALCULATION/PRCOESSING
	echo "<p class='greeting'>$greeting $name</p>"; 

		// echo "<p class='greeting'>Hello, nice to meet you, $name.</p>"; 

?>


<form method="POST">

	 <h1>Saying Hello</h1>

	 <div class='field'>
	 	<label>What is your name?</label>
	 	<input type="text" name="name" value="<?=$name?>">  
	 </div>

	 <div class='field'> 
	 	<label>What is your greeting?</label>
	 	<input type='text' name="greeting" value="<?=$greeting?>"> 
	</div> 	

	 <button type="submit" name="submitted">Submit</button>

</form>































