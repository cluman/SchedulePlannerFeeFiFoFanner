<?php

session_start();
if (!array_key_exists ("pass" , $_SESSION)) {
	echo "You are not logged in. <br>";
	exit();
}
	
$pass = $_SESSION['pass'];
if ($pass == null)
{
	echo "You are not logged in. <br>";
	exit();
}

?>