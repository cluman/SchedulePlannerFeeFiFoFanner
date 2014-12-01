<html>

<body>

<form action="LoginProcessing.php" onSubmit="return validateForm();" method="post" name="Form">
E-mail: <input id="email" type="text" name="email"><br>
Password: <input type="password" name="password"><br>
<input type="submit">
</form>

<br><br>
<a href="index.html/#ForgotPassword">Forgot password</a><br>

<?php
session_start();
$email = $_SESSION['email'];

echo "
<script>
document.forms['Form']['email'].value = '$email';
</script>
";

?>

<script>

function validateForm() {	

	var email = document.forms["Form"]["email"].value;
	if (email.indexOf("@") <= -1) {
		alert("Please insert a valid email");
        return false;
	}
	
	var pass = document.forms["Form"]["password"].value;	
	if (pass == "") {
		alert ("Please insert a password");
		return false;
	}	
		
	return true;
}


</script>


</body>
</html>