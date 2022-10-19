<link rel="stylesheet" href="practice-styles.css"> 

<?php include('practice-data.php')?>

<activity-list>

	<?php foreach ($activities as $activity){ ?>

		<activity-grid>

			<h2><?=$activity ['season']?></h2>
			<li><?=$activity ['activity']?></li>
			<li><?=$activity ['temperature']?></li>
			<li><?=$activity ['location']?></li>
		</activity-grid>

	<?php } ?>



</activity-list>


<?php 

	$bubbleTea = 8.39; 
	$water = 1.99; 
	$sandiwch = 10.99; 
	$tax = 0.12; 

	$totalTax = ($bubbleTea + $water + $sandiwch) * $tax; 
	$total = $bubbleTea + $water + $sandiwch + $totalTax; 

	$prettyTotal = number_format($total, 2, ".", ",");
	echo $prettyTotal; 

?>