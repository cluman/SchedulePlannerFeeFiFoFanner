 <?php

session_start();
$_SESSION['pass'] = "";

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

echo "<script>window.location = 'index.php#Login'</script>";

?>