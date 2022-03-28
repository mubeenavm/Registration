<?php 
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
else
{
	echo "<div class='form'>
<h3>You are logged in successfully.</h3>
<br/>Click here to <a href='logout.php'>Logout</a></div>";
}
?>
	