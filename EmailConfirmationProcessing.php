<?php

header('Location: Login.php');

$entered_confirmation_code = $_POST["confirmation_code"];
$email = $_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Scheduler";
$db = mysql_connect($servername, $username, $password) or die("Database Error");
mysql_select_db($dbname,$db);

//Verify if e-mail is already registered
/* $sql = "SELECT * FROM User WHERE email='$email'";
$resource = mysql_query($sql);
if($resource === false)
{	die("Database Error <br>"); }
$grab = mysql_fetch_assoc($resource);
if (mysql_num_rows($resource) > 0) 
{   echo "E-mail already confirmed! <br>Try <a href='Login.php'>login</a>."; die(); } */ //Commented only for tests

$sql = "SELECT * FROM Registration WHERE email='$email'";
$resource = mysql_query($sql);
if($resource === false)
{	die("Database Error <br>"); }

$grab = mysql_fetch_assoc($resource);
if (mysql_num_rows($resource) <= 0) 
{   echo "E-mail not registered."; }

else
{
	$confirmation_code = $grab['code'];
	//echo $code . "<br><br>";
	
	if ($entered_confirmation_code != $confirmation_code) 
	{
		die ("Invalid code!");
	}
	else 
	{
		$password = $grab['password'];
		$salt = $grab['salt'];
					
		if (mysql_query("INSERT INTO user (email, password, salt) VALUES('$email', '$password', '$salt')"))
			echo "Registration succeeded. <br>";
		//else
			//die ("Couldn't register. Please, try again later or try again with a different e-mail. <br>"); //Commented only for tests
		
		/* if(mysql_query("DELETE FROM registration WHERE email='$email'") == false)
		{
			echo "Error in temporary database. Try <a href='Login.php'>login</a>.";
			die();
		}		
		else
			{
				echo "Try <a href='Login.php'>login</a>.";
			} */ //Commented only for tests
		
		echo "<script> alert ('Confirmation succeeded.') </script>";
	}
	
    /* echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["code"]."</td><td>".$row["username"]." ".$row["email"]."</td></tr>";
    }
    echo "</table>"; */
} 

?>