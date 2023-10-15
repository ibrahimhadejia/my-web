<title>auth.php</title>
<?php
session_start();
if(!isset($_SESSION["username"]))
{
//  redirecting user to the login page
header("Location: login.php");
exit(); 
}
?>