<html>
<body>

<?php

require 'DatabaseConnection.php';

$entered_password = $_POST["cur_pass"];
$new_password = $_POST["new_pass"];

session_start();
$email = $_SESSION['email'];

//Query the DB
$resource = mysql_query("SELECT * FROM user WHERE email = '$email'");
if($resource === false)
{die("Database Error 16");}


$grab = mysql_fetch_assoc($resource);

$salt = $grab['salt'];

$encrypted_entered_password = sha1($salt . $entered_password);

// echo "Entered pass: $encrypted_entered_password <br>";
// echo "Correct pass: " . $grab['password'] . "<br>";
// echo "Temp pass: " . $grab['temp_password'] . "<br>";
// echo "Salt: $salt <br>";
// echo "Entered pass: $password <br>";
// echo "Email: $email <br>";

$encrypted_new_password = sha1($salt . $new_password);


if ($encrypted_entered_password == $grab['password'] || $encrypted_entered_password == $grab['temp_password'])
{
	//MATCHING EMAIL AND PASSWORD WERE INSERTED
	
	$resource = mysql_query("UPDATE user SET password='$encrypted_new_password' WHERE email='$email'");
	if($resource === false)
	{	die("Database Error 02"); }
	
	$resource = mysql_query("UPDATE user SET temp_password='' WHERE email='$email'");
	if($resource === false)
	{	Echo("Error deleting temporary password, but never mind. Not a big deal."); }
	
	echo "<script>alert('Password changed!')</script>";	
	echo "<script>window.location = 'index.php#Login'</script>";
	exit();
}

else
{
	echo "<script>alert('Wrong password!')</script>";	
	echo "<script>window.location = 'index.php#ChangePassword'</script>";
}


?>

</body>
</html>