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

	$quote = " "; 
	$author = "";


	if (isset($_POST["submitted"])){

		if (isset($_POST["quote"]) ){
			$quote = $_POST["quote"];
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


