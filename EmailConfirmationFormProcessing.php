<?php

$entered_confirmation_code = $_POST["confirmation_code"];
$email = $_POST["email"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Scheduler";
$db = mysql_connect($servername, $username, $password) or die("Database Error");
mysql_select_db($dbname,$db);

$sql = "SELECT * FROM Registration WHERE email='$email'";
$resource = mysql_query($sql);

if($resource === false)
{
	die("Database Error<br>");
}

$grab = mysql_fetch_assoc($resource);

//TODO verify if username or email are already registered

if (mysql_num_rows($resource) <= 0) 
{
    echo "E-mail not registered!";
}
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
		echo "Confirmation succeeded.<br>";
		
		// TODO criar nova entrada em 'User'

		$password = $grab['password'];
		$salt = $grab['salt'];
		
		$sql = "INSERT INTO user (email, password, salt) VALUES('$email', '$password', '$salt')";		
		if (mysql_query($sql))
			echo "Registration succeeded. <br>";
		else
			echo "Couldn't register. Please, try again later. <br>";
		
		// TODO deletar banco entrada de 'registration'
		
		//$sql = "DELETE FROM registration WHERE email='$email'";
		
		
	}
	
    /* echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["code"]."</td><td>".$row["username"]." ".$row["email"]."</td></tr>";
    }
    echo "</table>"; */
} 

?>
