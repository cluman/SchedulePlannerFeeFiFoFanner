<html>
<title>FeeFiFoFanner</title>
<body>
<p>Hey! You're in your main page now, <b><a id="email"></a></b>! =)</p>
</body>

<?php 

session_start();
if (array_key_exists("email", $_POST))
{
	echo "DEBUG yes";
	$email = $_POST["email"];
	$_SESSION['email'] = $_POST["email"];
}

else {
	$email = $_SESSION['email'];
}


echo "
<script>
document.getElementById('email').innerHTML = '$email';
</script>
";
		
?>

</html>