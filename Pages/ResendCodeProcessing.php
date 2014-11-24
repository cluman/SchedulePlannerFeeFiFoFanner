 <?php
 
 
header('Location: EmailConfirmationForm.php');
 
require 'DatabaseConnection.php';
 
 
$email = $_POST["email"];
  
$confirmation_code = randStr(8);

$resource = mysql_query("SELECT * FROM Registration WHERE email='$email'");
if($resource === false)
{	die("Database Error <br>"); }
$grab = mysql_fetch_assoc($resource);
if (mysql_num_rows($resource) <= 0) 
{   echo "E-mail not registered, or already confirmed. Try <a href='Login.php'>login</a>."; die(); }


if ($conn->query("UPDATE Registration SET code='$confirmation_code' WHERE email='$email'") === TRUE) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
	die();
}



echo "<script>alert('New code sent to your e-mail.');</script>";

	
function randStr($length) {
    $chars = '123456789BCDFGHJKLMNPQRSTVWXYZ'; //No vowels so it won't write awkward words; No zero so it won't be mistaken with the letter O
    $random = '';
    for ($i = 0; $i < $length; $i++) {		
        $random .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $random;
}
 
 
 
 ?>
