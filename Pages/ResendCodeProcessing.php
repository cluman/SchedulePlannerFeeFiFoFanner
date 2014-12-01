 <?php
 
require 'DatabaseConnection.php';
 
$email = $_POST["email"];
  
$confirmation_code = randStr(8);

// Verifies if e-mail is in fact registered
$resource = mysql_query("SELECT * FROM Registration WHERE email='$email'");
if($resource === false)
{	die("Database Error <br>"); } 
$grab = mysql_fetch_assoc($resource);
if (mysql_num_rows($resource) <= 0) 
{   echo "E-mail not registered, or already confirmed. Try <a href='index.html#Login'>login</a>."; exit(); }

//Update database with new code
if ($conn->query("UPDATE Registration SET code='$confirmation_code' WHERE email='$email'") == FALSE) 
{
	echo "Error updating record: " . $conn->error;
	exit(); 
}

// Sets email
$to = $email;
$subject = "Confirmation code resent";
$fromName = "FeeFiFoFanner";
$content = 
"
Your new confirmation code is <b>$confirmation_code</b><br><br>
";

require "email_config/SendEmailConfig.php";

if (SendEmail ($to, $subject, $content, $fromName))
{
	echo "<script>alert('New confirmation code sent via e-mail.');</script>";
	echo "<script>window.location = 'index.html#EmailConfirmation'</script>";	
}
else
{
	echo "Couldn't send confirmation code via e-mail. Please, try to <a href='index.html#ResendCode'>send your code again</a> later.<br>";
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