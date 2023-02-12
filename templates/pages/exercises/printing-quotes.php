


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

		if (isset($_POST["clear"]) ){
        	$_POST = array();
      	}

		$message1 = "<p>What is the quote? $quote.</p>";
		$message2 = "<p>Who wrote it? $author.</p>";
		$message3 ="<p>$author says, '$quote.'</p>"; 


		echo $message1;
		echo $message2;
		echo $message3;
	}


	
?>

<form method="POST">

	<div class='field'> 
		<label>What is the quote?</label>
		<input type="text" name="quote" value="<?=$quote?>">
	</div>

	<div class='field'>
		<label>Who said it?</label>
		<input type="text" name="author" value="<?=$author?>">  
	</div>

	<button type="submit" name="submitted">Submit</button>
	 <button type="submit" name="clear" value="<?=$clear?>">Clear</button>

</form>



