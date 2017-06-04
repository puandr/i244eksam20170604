<?php
	//Overwriting "note" cookie with a new note, taken from textarea "noteText"
	setcookie("note", $_POST['noteText'], time() + (86400 * 30), "/");
	//go back to index page
	header("Location: index.php");

?>