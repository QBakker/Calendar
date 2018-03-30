<?php 
	$month = [null, "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
?>

<article class="current">
	<h1>Current:</h1>
	<p class="inputField">Firstname: <?= $birthday["birthday_firstname"]?></p>
	<p class="inputField">Day: <?= $birthday["birthday_day"]?></p>
	<p class="inputField">Month: <?=$month[$birthday["birthday_month"]]?></p>
	<p class="inputField">Year: <?= $birthday["birthday_year"]?></p>
</article>

<article>
	<h1>New:</h1>
	<form action="<?= URL ?>birthday/editSave/<?= $birthday["birthday_id"]?>" method="POST">

		<input type="hidden" name="id" value="<?= $birthday["birthday_id"] ?>">

		<p class="inputField">Firstname:</p>
		<input type="text" name="firstname" value="<?=$birthday["birthday_firstname"]?>">

		<p class="inputField">Day:</p>
		<select name="day">
	<?php
	   		$days = 1;
	       	for ($days=1; $days < 32; $days++) {
	?>
	     		<option value="<?=$days?>"><?=$days?></option>
	<?php
	       	}
	?>
		</select>

		<p class="inputField">Month:</p>
		<select name="month">
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
		</select>

		<p class="inputField">Year:</p>
		<select name="year">
	<?php
	   		$years = date('Y');
	       	for ($i=0; $i < 101; $i++) {
	?>
	 		<option value="<?=$years-$i?>"><?=$years-$i?></option>
	<?php
	       	}
	?>
		</select>
		<input type="submit">
	</form>
</article>