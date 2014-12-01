 <?php
 
//header('Location: Login.php');
 
$email = $_POST["email"];
  
session_start();
$_SESSION['email'] = $email;
 
$temp_password = randPass(8);
 
require 'DatabaseConnection.php';
 
 $resource = mysql_query("SELECT * FROM user WHERE email = '$email'");
if($resource === false)
{	die("Database Error 01"); }

if(mysql_num_rows($resource) == 0)
{	

	//E-mail not registered or not confirmed yet. Will now check to see if it is waiting to be confirmed.
	$resource = mysql_query("SELECT * FROM registration WHERE email = '$email'");
	if($resource === false)
	{die("Database Error 22");}
	
	if(mysql_num_rows($resource) != 0) {
		echo "E-mail not confirmed.<br>
			  <a href='EmailConfirmation.php'>Click here</a> to confirm your e-mail.<br>";
		exit();
	}
	
	else {
		echo "<script>alert('E-mail not registered.');</script>";
		echo "<script>window.location = 'ForgotPassword.php'</script>";
		exit();
	}	

}


$grab = mysql_fetch_assoc($resource);

$salt = $grab['salt'];

$encrypted_temp_password = sha1 ($salt . $temp_password);  //Wouldn't really need a salt, but never mind.

// echo "Salt: '$salt' <br>";
// echo "Temp pass: '$temp_password' <br>";
// echo "Temp pass enc: '$encrypted_temp_password' <br>";
// echo "email: $email <br>";


$resource = mysql_query("UPDATE user SET temp_password='$encrypted_temp_password' WHERE email='$email'");
if($resource === false)
{	die("Database Error 02"); }



// Sets email
$to = $email;
$subject = "New password";
$fromName = "FeeFiFoFanner";
$content = 
"
Your temporary password is <b>$temp_password</b>.<br><br>
";

require "email_config/SendEmailConfig.php";

if (SendEmail ("raphaelrs55@gmail.com", $subject, $content, $fromName))  //CHANGE
{
	echo "<script>alert('New password sent via e-mail.');</script>";
	echo "<script>window.location = 'Login.php'</script>";
}	
 else {
    die ("Could not send e-mail.");
}
 
 
 
 
 function randPass($length) {
    $chars = '123456789BCDFGHJKLMNPQRSTVWXYZbcdfghjklmnpqrstvwxyz'; //No vowels so it won't write awkward words; No zero so it won't be mistaken with the letter O
    $random = '';
    for ($i = 0; $i < $length; $i++) {		
        $random .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $random;
}
 
 ?>
 