<html>
<body>

<?php

//print phpinfo();

/* require_once('/library/PHPMailer/class.phpmailer.php');
$mail = new \PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = 'login';
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'example@gmail.com';
$mail->Password = 'somepassword';
$mail->SetFrom('example@gmail.com', 'Example');
$mail->Subject = 'The subject';
$mail->Body = 'The content';
$mail->AddAddress('receiver@gmail.com');
$mail->Send(); */

/* require_once('class.phpmailer.php');

$mail             = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$mail->Username   = "yourusername@gmail.com";
$mail->Password   = "yourpassword";          
$mail->Host       = "smtp.gmail.com";
$mail->Port       = 587;           

$mail->SetFrom('yourusername@gmail.com', 'Your Name');
$mail->Subject    = "My subject";
$mail->Body    = "My body";

$mail->AddAddress("someone@example.com", "Recipient name");

$mail->Send();  */

/* require("C:\xampp\PHPMailer-master\class.phpmailer.php");
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->Host = "mymail.brinkster.com";
$mail->SMTPAuth = true;
$mail->Username = "you@domain.com";
$mail->Password = "EmailPassword";
 
$mail->From = "you@domain.com";
$mail->FromName = "Your Name";
$mail->AddReplyTo("you@domain.com");
$mail->AddAddress("user@domain.com");
$mail->IsHTML(true);
$mail->Subject = "Test message sent using the PHPMailer component";
$mail->Body = "This is a test message.";
$mail->Send(); */

function printData ($msg, $data)
{
	echo "<font color='gray'>$msg: <b>$data</b></font><br><br>";
}

$password = $_POST["password"];
$email = $_POST["email"];

$salt = rand(100000, 999999);

$confirmation_code = randStr(8);

$encrypted_password = sha1($salt . $password);



/* printData ("Username", $username);
printData ("E_mail", $email);
printData ("Password", $password); */

echo "<br><br>";

//printData ("Salt", $salt);
//printData ("Salt + Password", $salt . $password);
//printData ("Encrypted password", $encrypted_password);

echo "<font color='red'>" . "Confirmation code: " . "<b>" . $confirmation_code . "</b>" . "</font>" . "<br><br>";




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


//$conn = new mysqli($server, $user, $password, "guiaph");

//mysql_query ("INSERT INTO first_table (1, 'aaa') ");

$sql = "SELECT code FROM Registration WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows) {
	echo ("E-mail already registered!"); //Check 'user' table too!! 
	exit(0);
}

$sql = "INSERT INTO registration (email, password, salt, code) VALUES('$email', '$encrypted_password', '$salt', '$confirmation_code')";

if (mysql_query($sql) == TRUE) {
	echo "New record created successfully.";
} else { 
	echo "Something went wrong.... ";
}

$SQL = "SELECT * FROM registration";
$RS  = mysql_query($SQL);
while($RF = mysql_fetch_array($RS))
{
    echo '<pre>';
    print_r($RF);
    echo '</pre>';
}

//---------------------


$email = "raphaelrs55@hotmail.com";
$usersubject = "Thank You";
$userheaders = "Fkkkk\n";
$usermessage = "Thank you for subscribing to our mailing list.";

error_reporting(E_ALL);

if (mail($email,$usersubject,$usermessage,$userheaders))
	echo "E-mail sent." . "</br>";
else
	echo "E-mail NOT sent." . "</br>";
	
	
	
function randStr($length) {
    $chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random = '';
    for ($i = 0; $i < $length; $i++) {		
        $random .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $random;
}

?>


</body>
</html>
