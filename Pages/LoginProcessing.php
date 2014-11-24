<html>
<body>

<?php 

$password = $_POST["password"];
$email = $_POST["email"];

$server = 'localhost';
$base      = 'Scheduler';
$user  = 'root';
$passwd    = '';
//Connect to DB
$db = mysql_connect($server, $user, $passwd) or die("Database Error");
mysql_select_db($base,$db);

//Query the DB
$resource = mysql_query("SELECT * FROM registration WHERE email = '$email'");
if($resource === false)
{
	die("Database Error");
}

if(mysql_num_rows($resource) == 0)
{
	die("E-mail not registered.");
}

$grab = mysql_fetch_assoc($resource);

$salt = $grab['salt'];

$enteredPassEncptd = sha1($salt . $password);

$correctPassword = $grab['password'];

///echo "Entered pass: $enteredPassEncptd <br>";
///echo "Correct pass: $correctPassword <br>";

if ($enteredPassEncptd == $correctPassword)
{
	echo "Welcome! <br>";
}
else
{
	echo "Wrong password! <br>";
	
	echo 
		" 
		<html>

		<body>

		<form action='LoginProcessing.php' onSubmit='return validateForm();' method='post' name='myForm'>
		E-mail: <input id='email' type='text' name='email' value = 'aaa@'><br>
		Password: <input type='password' name='password' value = '123'><br>
		<input type='submit'>
		</form>

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
		";
}


?>

</body>
</html>