
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
		padding: 5px;;
		margin-top: 50px;
		margin: 20px;
		max-width: 500px;
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

	 <button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>

</form>



<!-- Printing Quotes -->

<?php 

	$quote = ""; 
	$author = "";


	if (isset($_POST["submitted"])){

		if (isset($_POST["quote"])){
			$quote = $_POST["$quote"]; 
		}

		if (isset($_POST["author"])){
			$author = $_POST["author"];
		}
	}

// method 1
	echo "<p>What is the quote? '$quote.'</p>"; 

	echo "<p>Who wrote it? $author</p>"; 

	echo "<p>$author says, '$quote'</p>";

// method 2
	$message1 = "<p>What is the quote? $quote.</p>";
	$message2 = "<p>Who wrote it? $author.</p>";
	$message3 ="<p>$author says, '$quote.'</p>"; 

// method 3
	echo $message1;
	echo $message2;
	echo $message3;
	
?>

<form method="POST">
	<h1>Printing Quotes</h1>

	<div class='field'> 
		<label>What is the quote?</label>
		<input type="text" name="quote" value="<?=$quote?>">
	</div>

	<div class='field'>
		<label>Who said it?</label>
		<input type="text" name="author" value="<?=$author?>">  
	</div>

	<button type="submit" name="submitted">Submit</button>
</form>

<!-- method 2 -->
<p><?=$message1?></p>
<p><?=$message2?></p>
<p><?=$message3?></p>




<?php

	$noun = "";
	$adjective = "";
	$adverb = "";
	$verb = "";
	
	if (isset($_POST["submitted"])){

		if (isset($_POST["noun"])){
			$noun = $_POST["noun"];
		}

		if (isset($_POST["verb"])){
			$verb = $_POST["verb"];
		}

		if (isset ($_POST["adjective"])){
			$adjective = $_POST["adjective"]; 
		}

		if (isset ($_POST["adverb"])){
			$adverb = $_POST["adverb"]; 
		}
	}


	$message4 = "<p>Do you $verb your $adjective $noun $adverb? That's hilarious.</p>";

	echo $message4;
?>

<form method="POST">
	<h1>Mad LIbs</h1>

	<div class='field'>
		<label>Enter a noun</label>
		<input type="text" name="noun" value="<?=$noun?>">  
	</div>


	<div class="field">
		<label>Enter a verb</label>
		<input type="text" name="verb" value="<?=$verb?>">  
	</div>

	<div class="field">
		<label>Enter an adjective</label>
		<input type="text" name="adjective" value="<?=$adjective?>">  
	</div>

	<div class="field">
		<label>Enter an adverb</label>
		<input type="text" name="adverb" value="<?=$adverb?>">  
	</div>

	<button type="submit" name="submitted" value="<?=$submitted?>">Submit</button>


</form>

<p><?=$message4?></p> 
























