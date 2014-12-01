<html>
<body>

<?php

require 'DatabaseConnection.php';

$entered_confirmation_code = $_POST["confirmation_code"];
$email = $_POST["email"];

session_start();
$_SESSION['email'] = $email;

//Verify if e-mail is already registered
$sql = "SELECT * FROM User WHERE email='$email'";
$resource = mysql_query($sql);
if($resource === false)
{	die("Database Error <br>"); }
$grab = mysql_fetch_assoc($resource);
if (mysql_num_rows($resource) > 0) 
{   echo "E-mail already confirmed! <br>Try <a href='index.php#Login'>login</a>."; die(); } 

$sql = "SELECT * FROM Registration WHERE email='$email'";
$resource = mysql_query($sql);
if($resource === false)
{	die("Database Error <br>"); }

$grab = mysql_fetch_assoc($resource);
if (mysql_num_rows($resource) <= 0) 
{   echo "<script>alert('E-mail not registered.')</script>"; 
	echo "<script>window.location = 'index.php#EmailConfirmation'</script>";}

else
{
	$confirmation_code = $grab['code'];
	
	if ($entered_confirmation_code != $confirmation_code) 
	{
		echo "<script>alert('Invalid code!')</script>";
		echo "<script>window.location = 'index.php#EmailConfirmation'</script>";
	}
	else 
	{
		$password = $grab['password'];
		$salt = $grab['salt'];
					
		if (mysql_query("INSERT INTO user (email, password, salt) VALUES('$email', '$password', '$salt')") == false)			
			die ("Couldn't register. Please, try again later or try again with a different e-mail. <br>"); 
		
		if(mysql_query("DELETE FROM registration WHERE email='$email'") == false)
		{
			echo "Error in temporary database. Try <a href='index.php#Login'>login</a>.";
			die();
		}		
		// else
			// {
				// echo "Try <a href='Login.php'>login</a>.";
			// } 
		
		echo "<script> alert ('Confirmation succeeded.') </script>";
		echo "<script>window.location = 'index.php#Login'</script>";
	}

} 

?>

</body>
</html>