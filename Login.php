<html>

<body>

<form action="LoginProcessing.php" onSubmit="return validateForm();" method="post" name="Form">
E-mail: <input id="email" type="text" name="email" value = "aaa@"><br>
Password: <input type="password" name="password" value = "123"><br>
<input type="submit">
</form>

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