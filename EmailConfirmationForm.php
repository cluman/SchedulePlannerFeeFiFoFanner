<html>
<body>




<form action="EmailConfirmationProcessing.php" onSubmit="return validateConf();" method="post" name="myForm">
Insert your code: <input type="text" name="confirmation_code" value=""><br>
E-mail: <input type="text" name="email" value = ""><br>
<input type="submit">
</form>

<script>

function validateConf() {	

	var email = document.forms["myForm"]["email"].value;
	var confirmation_code = document.forms["myForm"]["confirmation_code"].value;
	
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
