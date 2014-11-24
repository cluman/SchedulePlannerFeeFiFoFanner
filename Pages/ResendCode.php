<html>
<body>

<form action="ResetCodeProcessing.php" onSubmit="return validateConf();" method="post" name="Form">

E-mail: <input type="text" name="email" value = ""><br>

<input type="submit">
</form>

</body>
</html>


<script>

function validateConf() {	

	var email = document.forms["Form"]["email"].value;
	var confirmation_code = document.forms["Form"]["confirmation_code"].value;
	
	if (email.indexOf("@") <= -1) {
		alert("Please insert a valid email");
        return false;
	}
	
	return true;
}

</script>
