<html>

<body>

<form action="ForgotPasswordProcessing.php" onSubmit="return validateForm();" method="post" name="Form">
E-mail: <input id="email" type="text" name="email" value = ""><br>
<input type="submit">
</form>

<br><br><br>
<a href='index.html/#Login'>Cancel</a>

<script>
function validateForm()
{
return true;
}
</script>

<?php
session_start();
$email = $_SESSION['email'];

echo "
<script>
document.forms['Form']['email'].value = '$email';
</script>
";

?>

</body>
</html>