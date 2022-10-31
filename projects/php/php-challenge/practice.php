<?php 
	
	// $add1 = 1; 
	// $add2 = 5; 

	// echo $add1 + $add2; 

	// function add($add1, $add2){
	// 	echo $add1 + $add2; 
	// }

	// add(11,"Four"); 

	$first = "Lilian" . " "; 
	$last = "Habib"; 

	echo $first; 
	echo $last; 
?>

<?php  
	$a = "ice cream"; 
	$b = "banana"; 
	$c = "rose"; 
	$d = "avocados";
	$e = "2";  
?>


<p>I want <?php echo $a;?> on a <?php echo $b;?>. I am hoping to also buy a <?=$c?> today too and maybe <?=$e?> <?php echo $d;?>.</p>

<?php 
	$first = "Lilian"; 
	$last = "Habib"; 
	$number = "2"; 
	$place = "BC";

	echo "<p>Hello, my name is " . $first . " " . $last . " and I have lived in " . $place . " for " . $number . " years.</p>";

	$information = [$first, $last, $number, $place]; 
	foreach ($information as $info){
		echo "<li>" . $info . "</li>"; 
	}

?>

<p>Hello, my name is <?=$first?> <?=$last?> and I have lived in <?php echo $place;?> for <?php echo$number;?> years.</p>

