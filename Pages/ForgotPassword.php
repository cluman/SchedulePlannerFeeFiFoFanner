<html>

<body>

<form action="ForgotPasswordProcessing.php" onSubmit="return validateForm();" method="post" name="Form">
E-mail: <input id="email" type="text" name="email" value = ""><br>
<input type="submit">
</form>

<br><br><br>
<a href='Login.php'>Cancel</a>

<script>
function validateForm()
{
return true;
}
</script>

</body>
</html>