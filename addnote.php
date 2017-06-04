<?php

setcookie("note", $_POST['markmedTekst'], time() + (86400 * 30), "/"); // 86400 = 1 day	
header("Location: index.php");

/*
echo 'we are here';
echo $_COOKIE["note"];
*/
?>