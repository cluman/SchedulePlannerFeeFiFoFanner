<?php

require "CheckLogin.php";


?>


<html>
<title>FeeFiFoFanner</title>
<body>
<p>Hey! You're in your main page now, <b><a id="email"></a></b>! =)</p>

<p>Now let's try to <a href="Logout.php">log you out</a>.</p>
</body>

<?php 
$email = $_SESSION['pass'];

echo "
<script>
document.getElementById('email').innerHTML = '$email';
</script>
";
		
?>

</html>