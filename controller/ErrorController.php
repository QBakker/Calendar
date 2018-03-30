<?php

function error_404()
{
	echo "404 - De gevraagde route is niet beschikbaar. Controleer je controller en action naam";
}

function error_createBirthday()
{
	echo "Something went wrong while uploading the content.";
}

function error_editBirthday()
{
	echo "Somthing went wrong while editing the content.";
}

function error_deleteBirthday()
{
	echo "Something went wrong while deleting the content.";
}