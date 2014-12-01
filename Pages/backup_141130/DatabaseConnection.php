
<?php

$DBserver = 'localhost';
$DBdatabase      = 'Scheduler';
$DBusername  = 'root';
$DBpassword    = '';


$DBlink     = mysql_connect($DBserver, $DBusername, $DBpassword);
$db          = mysql_select_db($DBdatabase,$DBlink);


if(!$DBlink)
{
	echo "Error connecting database!";
	exit();
}

// Create connection
$conn = new mysqli($DBserver, $DBusername, $DBpassword, $DBdatabase);

// Check connection
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
} 


?>