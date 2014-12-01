<html>
<body>

<?php

require 'DatabaseConnection.php';

$password = $_POST["password"];
$email = $_POST["email"];

session_start();
$_SESSION['email'] = $email;

$salt = rand(100000, 999999);

$confirmation_code = randStr(8);

$encrypted_password = sha1($salt . $password);


$result = $conn->query("SELECT * FROM Registration WHERE email='$email'");

if ($result->num_rows) {
	echo ("This e-mail is already registered, but hasn't been confirmed. <br>"); 
	echo ("<a href='index.html/#EmailConfirmation'>Click here</a> to confirm your email. <br>"); 
	exit();
}

$result2 = $conn->query("SELECT * FROM User WHERE email='$email'");
if ($result2->num_rows) {
	echo ("E-mail already registered! <br>"); 
	echo ("<a href='index.html/#Login'>Click here</a> to login. <br>"); 
	exit();
}

$sql = "INSERT INTO registration (email, password, salt, code) VALUES('$email', '$encrypted_password', '$salt', '$confirmation_code')";

if (mysql_query($sql) == FALSE) 
{
	die ("Something went wrong inserting into the database.... Scream for help!");
}


//---------------------


$to = $email;
$subject = "Your confirmation code";
$fromName = "FeeFiFoFanner";
$content = 
"
Welcome to FeeFiFoFanner!<br><br>
Your confirmation code is <b>$confirmation_code</b><br><br>
Thank you for subscribing! <br>
";


require "email_config/SendEmailConfig.php";

if (SendEmail ($to, $subject, $content, $fromName))
{
	echo "<script>alert('Confirmation code sent via e-mail.');</script>";
	echo "<script>window.location = 'index.html/#EmailConfirmation'</script>";
}
else
{
	echo "Couldn't send confirmation code via e-mail. Please, try to <a href='index.html/#ResendCode'>send your code again</a> later.<br>";
}	
	
function randStr($length) {
    $chars = '123456789BCDFGHJKLMNPQRSTVWXYZ'; //No vowels so it won't write awkward words; No zero so it won't be mistaken with the letter O
    $random = '';
    for ($i = 0; $i < $length; $i++) {		
        $random .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $random;
}

?>


</body>
</html>