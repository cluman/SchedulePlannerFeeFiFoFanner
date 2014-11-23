
<?php

$server = 'localhost';
$database      = 'Scheduler';
$username  = 'root';
$password    = '';


$link     = mysql_connect($server, $username, $password);
$db          = mysql_select_db($database,$link);


if(!$link)
{
	echo "Error connecting database!";
	exit();
}

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 


?>