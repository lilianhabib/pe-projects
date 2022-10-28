<?php 

	if (isset($_POST["add"])){
		echo "added";
	}
?>

<h1>Create</h1>

<form method="POST">
	<ield>
		<label>Type</label>
		<input>
	</field>

	<field>
		<lable>Range</lable>
		<input type="range" min="1" max="5">
	</field>

	<field>
		<label>Price</label>
		<input type="number"> 
	</field>

	<button type="submit" name="add">Submit</button>


</form>