<html>

<body>

<form action="EmailConfirmationProcessing.php" onSubmit="return validateConf();" method="post" name="Form">

E-mail: <input type="text" name="email" value = ""><br>

Insert your code: <input type="text" name="confirmation_code" value=""><br><br>

<input type="submit">
</form>


<?php
session_start();
$email = $_SESSION['email'];

echo "
<script>
document.forms['Form']['email'].value = '$email';
</script>
";

?>


<br><br>

- <a href="ResendCode.php">Resend code</a></br>

<script>

function validateConf() {	

	var email = document.forms["Form"]["email"].value;
	var confirmation_code = document.forms["Form"]["confirmation_code"].value;
	
	if (email.indexOf("@") <= -1) {
		alert("Please insert a valid email");
        return false;
	}
	
	if (confirmation_code == "") {
		alert ("Please insert code");
		return false;
	}
	
	return true;
}

</script>

</body>
</html>