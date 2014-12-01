<html>
<body>

<?php 

require 'DatabaseConnection.php';

$password = $_POST["password"];
$email = $_POST["email"];

session_start();
$_SESSION['email'] = $email;

//Query the DB
$resource = mysql_query("SELECT * FROM user WHERE email = '$email'");
if($resource === false)
{die("Database Error 14");}

//This will verify if e-mail is in fact registered
if(mysql_num_rows($resource) == 0)
{
	//E-mail not registered or not confirmed yet. Will now check to see if it is waiting to be confirmed.
	$resource = mysql_query("SELECT * FROM registration WHERE email = '$email'");
	if($resource === false)
	{die("Database Error 22");}
	
	if(mysql_num_rows($resource) != 0) {
		echo "E-mail not confirmed.<br>
			  <a href='index.php#EmailConfirmation'>Click here</a> to confirm your e-mail.<br>";
		exit();
	}
	
	else {
		echo "<script>alert('E-mail not registered.');</script>";
		echo "<script>window.location = 'index.php#Login'</script>";
		exit();
	}
}
else {

	$grab = mysql_fetch_assoc($resource);

	$salt = $grab['salt'];

	$encrypted_entered_password = sha1($salt . $password);

	// echo "Entered pass: $encrypted_entered_password <br>";
	// echo "Correct pass: " . $grab['password'] . "<br>";
	// echo "Temp pass: " . $grab['temp_password'] . "<br>";
	// echo "Salt: $salt <br>";
	// echo "Entered pass: $password <br>";
	// echo "Email: $email <br>";


	if ($encrypted_entered_password == $grab['password'])
	{
		//MATCHING EMAIL AND PASSWORD WERE INSERTED
		echo "<script>window.location = 'Main.php'</script>";
		$_SESSION['pass'] = $email;
		exit();
	}
	else if ($encrypted_entered_password == $grab['temp_password'])
	{
		//User forgot password and is using his temporary one
		echo "<script>window.location = 'index.php#ChangePassword'</script>";
		exit();
	}
	else
	{
		echo "<script>alert('Wrong password!')</script>";	
		echo "<script>window.location = 'index.php#Login'</script>";
	}
}

?> 

		


</body>
</html>
		