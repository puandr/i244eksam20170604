<!DOCTYPE html>
<?php
	//If cookie is not set, set acookie and insert a blank "note" variable.
	if (!isset($_COOKIE["note"])) {
		$cookie_name = "note";
		$note = "";
		setcookie($cookie_name, $note, time() + (86400 * 30), "/"); // 86400 = 1 day, cookie live time is 30 days.
	}
?>

<html>
<head>
	<title>I244 exam. Personal notes.</title>
	<meta charset="utf-8">
</head>

<body>

<p>Hello There!</p>

<p>Here you can make your own notes. </p>

<ul>
	<li>Notes are saved to cookies, so if you delete cookies from your browser or won't visit this page for 30 days
	your notes will be erased.</li>
	<li>To save your note, please press "Save note" button. If you leave this page without hitting this button all changes won't be saved.</li>
</ul>

<p>Your notes so far:</p>

<form method="post" action="addnote.php" id="usrform">
	<!-- If code below break in multiple rows, then every note save adds a tabultion mark at the beginning-->
	<p><textarea rows="10" cols="50" name="noteText" form="usrform"><?php if (isset($_COOKIE["note"])) {echo $_COOKIE["note"];}?></textarea></p>
	<p><input type="submit" value="Save note"></p>
</form>
</body>
</html>