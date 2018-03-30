<?php

function getAllBirthdays()
{
	$db = openDatabaseConnection();

	$sql = "SELECT * 
			FROM birthdays 
			ORDER BY birthday_month, birthday_day, birthday_year, birthday_firstname";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getBirthday($id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays 
			WHERE birthday_id = :id 
			LIMIT 1";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return $query->fetch();
}

function createBirthday()
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : null;
	$day = isset($_POST["day"]) ? $_POST["day"] : null;
	$month = isset($_POST["month"]) ?$_POST["month"] : null;
	$year = isset($_POST["year"]) ?$_POST["year"] : null;

	if ($firstname === null || $day === null || $month === null || $year === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays (birthday_firstname, birthday_day, birthday_month, birthday_year) 
			VALUES (:firstname, :day, :month, :year)";

	$query = $db->prepare($sql);
	$query->execute(array(
	 ":firstname" => $firstname,
	 ":day" => $day,
	 ":month" => $month,
	 "year" => $year
	));

	$db = null;

	return true;
}

function editBirthday($id=null)
{
	$firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : null;
	$day = isset($_POST["day"]) ? $_POST["day"] : null;
	$month = isset($_POST["month"]) ?$_POST["month"] : null;
	$year = isset($_POST["year"]) ?$_POST["year"] : null;

	if ($id === null || $firstname === null || $day === null || $month === null || $year === null) {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "UPDATE birthdays 
			SET birthday_firstname = :firstname, birthday_day = :day, birthday_month = :month, birthday_year = :year 
			WHERE birthday_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
	 ":firstname" => $firstname,
	 ":day" => $day,
	 ":month" => $month,
	 "year" => $year,
	 "id" => $id
	));

	$db = null;

	return true;
}

function deleteBirthday($id)
{
	if ($id === '') {
		return false;
	}

	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE birthday_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id
	));

	$db = null;

	return true;
}
