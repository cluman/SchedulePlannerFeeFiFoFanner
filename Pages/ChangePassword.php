<?php

session_start();
$email = $_SESSION['email'];
$entered_password = $_SESSION['entered_password'];

?>

<form action="ChangePasswordProcessing.php" onSubmit="return validateForm();" method="post" name="Form">
Current password: <input type="password" name="cur_pass"><br>
New password: <input type="password" name="new_pass"><br>
New password again: <input type="password" name="new_pass_conf"><br>
<input type="submit">
</form>

<br><br>
<a href="javascript:history.go(-1)">Cancel</a><br>


<script>
function validateForm() {	

	var pass1 = document.forms["Form"]["new_pass"].value;
	var pass2 = document.forms["Form"]["new_pass_conf"].value;
	
	if (strlen($pass1) < 4) {
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


<?php

?>