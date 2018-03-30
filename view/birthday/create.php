<article>
<h1>New:</h1>
<form action="<?= URL ?>birthday/createSave" method="POST">

	<p class="inputField">Firstname:</p>
	<input type="text" name="firstname" placeholder="First Name">

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