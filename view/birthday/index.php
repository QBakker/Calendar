<?php
	$month = [null, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
	$currentMonth = null;

	foreach ($birthdays as $birthday) {
	
		if ($currentMonth !== $birthday["birthday_month"]){
			$currentMonth = $birthday["birthday_month"];
?>	
			<h1><?=$month[$birthday["birthday_month"]]?></h1>
<?php			
		}
		if ($currentDay !== $birthday["birthday_day"]){
			$currentDay = $birthday["birthday_day"];
?>
			<h2><?=$birthday["birthday_day"]?></h2>
<?php
		}
?>		
	<p>
		<a href="<?= URL ?>birthday/edit/<?=$birthday["birthday_id"]?>">
			<?=$birthday["birthday_firstname"]?>
			(<?=$birthday["birthday_year"]?>)
		</a>
	    <a href="<?= URL ?>birthday/delete/<?=$birthday["birthday_id"]?>">X</a>
	</p>
<?php
	}
?>
	<p><a href="<?= URL ?>birthday/create">+ add</a></p>
