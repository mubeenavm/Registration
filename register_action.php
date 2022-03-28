<?php  
include("dbconnect.php");
if(isset($_POST["submit"]))
{
	$name=$_POST["name"];
$password=$_POST["password"];
$username=$_POST["identity"];
$password=$_POST["password"];
$created_date_time = date("Y-m-d H:i:s");
	$result = mysqli_query($GLOBALS["___mysqli_ston"],"INSERT into `users` (name, password, email,created_date_time)
VALUES ('$name', '".md5($password)."', '$username','$created_date_time')");


	if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
}
  
?>