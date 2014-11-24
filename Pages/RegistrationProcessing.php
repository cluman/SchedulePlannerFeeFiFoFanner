<html>
<body>

<?php

session_start();

header('Location: EmailConfirmationForm.php');

$password = $_POST["password"];
$email = $_POST["email"];

$_SESSION['email'] = $email;

$salt = rand(100000, 999999);

$confirmation_code = randStr(8);

$encrypted_password = sha1($salt . $password);


//---------------------

$server = 'localhost';
$base      = 'Scheduler';
$user  = 'root';
$passwd    = '';
$link     = mysql_connect($server, $user, $passwd);
$db          = mysql_select_db($base,$link);
if(!$link)
{
    echo "Error connecting database!";exit();
}

// Create connection
$conn = new mysqli($server, $user, $passwd, $base);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT code FROM Registration WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows) {
	echo ("E-mail already registered! <br>"); 
	echo ("Click here to confirm your email. <br>"); //TODO
	exit(); 
}

$sql2 = "SELECT * FROM User WHERE email='$email'";
$result2 = $conn->query($sql2);
if ($result2->num_rows) {
	echo ("E-mail already registered! <br>"); 
	echo ("Click here to login. <br>"); //TODO
	exit();
}

$sql = "INSERT INTO registration (email, password, salt, code) VALUES('$email', '$encrypted_password', '$salt', '$confirmation_code')";

if (mysql_query($sql) == TRUE) {
	echo "New record created successfully.<br>";
} else { 
	echo "Something went wrong inserting into the database.... Scream for help! <br>";
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
}
else
{
	echo "Couldn't send confirmation code via e-mail. Please, try to <a href='ResetCode.php'>send your code again</a> later.<br>";
	exit();
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