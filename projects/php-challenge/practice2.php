<link rel="stylesheet" href="practice-styles.css"> 

<?php include ("practice-data.php")?>


<show-list>
<?php
	function awardBanner ($award){
		if ($award){
			return "<p class='sign'>WON</p>";
		}
	}
?>
	<?php foreach($shows as $show){?>

		<show-grid>

			<h2><?=$show["name"]?></h2>

			<p>The year of the show: <?=$show["year"]?></p>

			<p>What is the category: <?$show["category"]?></p>

			<?=awardBanner($show["award"])?>

		</show-grid>


	<?php }?>



</show-list>	




