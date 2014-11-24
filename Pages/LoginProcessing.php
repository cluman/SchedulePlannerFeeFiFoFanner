<html>
<body>

<?php 

$url_to_go = "";

//header("Location: $url_to_go");
//echo "Location: $url_to_go <br><br>";

require 'DatabaseConnection.php';

$password = $_POST["password"];
$email = $_POST["email"];

session_start();
$_SESSION['email'] = $email;
$_SESSION['entered_password'] = $password;

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
			  <a href='EmailConfirmation.php'>Click here</a> to confirm your e-mail.<br>";
		exit();
	}
	
	else {
		echo "E-mail not registered.<br>
			  <a href='Registration.php'>Click here</a> to register.<br>";
		//exit();
	}
}
else {

	$grab = mysql_fetch_assoc($resource);

	$salt = $grab['salt'];

	$encrypted_entered_password = sha1($salt . $password);

	echo "Entered pass: $encrypted_entered_password <br>";
	echo "Correct pass: " . $grab['password'] . "<br>";
	echo "Temp pass: " . $grab['temp_password'] . "<br>";
	echo "Salt: $salt <br>";
	echo "Entered pass: $password <br>";
	echo "Email: $email <br>";


	if ($encrypted_entered_password == $grab['password'])
	{
		//MATCHING EMAIL AND PASSWORD WERE INSERTED
		//$url_to_go = "Main.php";
		echo "<script>window.location = 'Main.php'</script>";
		exit();
	}
	else if ($encrypted_entered_password == $grab['temp_password'])
	{
		//User forgot password and is using his temporary one
		//$url_to_go = "ChangePassword.php";
		echo "<script>window.location = 'ChangePassword.php'</script>";
		exit();
	}
	else
	{
		echo "Wrong password! <br><br><br>";	
		
	}
}

?> 

		<br><br><br>
		<form action='LoginProcessing.php' onSubmit='return validateForm();' method='post' name='Form'>
		E-mail: <input id='email' type='text' name='email' value = ''><br>
		Password: <input type='password' name='password'><br>
		<input type='submit'>
		</form>
		
		<br><br>
		<a href="ForgotPassword.php">Forgot password</a><br>
		
		<?php
		
		echo "
			<script>
			document.forms['Form']['email'].value = '$email';
			</script>"
		?>
		<script>

		function validateForm() {	

			var email = document.forms['myForm']['email'].value;
			if (email.indexOf('@') <= -1) {
				alert('Please insert a valid email');
				return false;
			}
			
			var pass = document.forms['myForm']['password'].value;	
			if (pass == '') {
				alert ('Please insert a password');
				return false;
			}	
				
			return true;
		}


		</script>


		</body>
		</html>
		