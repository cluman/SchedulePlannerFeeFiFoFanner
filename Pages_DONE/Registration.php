<html>
<body>

<form action="RegistrationProcessing.php" onSubmit="return validateForm();" method="post" name="Form">
E-mail: <input id="email" type="text" name="email"><br>
Password: <input type="password" name="password"><br>
Retype password: <input type="password" name="password_confirmation"><br>
<input type="submit">
</form>

<script>

function validateForm() {	
	
	var email = document.forms["Form"]["email"].value;
	
	if (email.indexOf("@") <= -1) {
		alert("Please insert a valid email");
        return false;
	}
	
	var pass1 = document.forms["Form"]["password"].value;
	var pass2 = document.forms["Form"]["password_confirmation"].value;
	
	if (pass1.length < 4) {
		alert ("Please choose a password of at least 4 characters");
		return false;
	}
	
	if (pass1 != pass2) {
		alert ("Password confirmation does not match");
		return false;
	}	
		
	return true;
}


</script>

</body>
</html>