<html>




<body>


<form action="RegistrationProcessing.php" onSubmit="return validateForm();" method="post" name="myForm">
E-mail: <input id="email" type="text" name="email" value = r+"aaa@"><br>
Password: <input type="password" name="password" value = "123"><br>
Retype password: <input type="password" name="password_confirmation" value = "123"><br>
<input type="submit">
</form>

<script>
var r = Math.floor((Math.random() * 999) + 1);;
document.getElementById('email').value=r+"aaa@";
</script>

<script>

function validateForm() {	
	
	var email = document.forms["myForm"]["email"].value;
	
	if (email.indexOf("@") <= -1) {
		alert("Please insert a valid email");
        return false;
	}
	
	var pass1 = document.forms["myForm"]["password"].value;
	var pass2 = document.forms["myForm"]["password_confirmation"].value;
	
	if (pass1 == "") {
		alert ("Please choose a password");
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
