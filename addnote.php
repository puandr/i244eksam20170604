<?php

setcookie("note", $_POST['markmeTekst'], time() + (86400 * 30), "/"); // 86400 = 1 day	
header("Location: index.php");

?>