<?php
session_start();
/*if(isset($_SESSION['uname']))

{ //This is for...if user loggedin and currebtly in the home page..now he wants click again in login...so not allowing to login instead redirecting to the home only...

	//echo "successful";
	echo '<script type="text/javascript">
	 window.location.replace("index.php");
    </script>';
//	header("location:index.php");
  
}*/

/* $host="localhost";
$user="id17020119_user";
$password="i*uH|*u[5F&cE\OM";
$db="id17020119_system";
code for clickong on home redirecting to login
session_start();
*/

$database=mysqli_connect("localhost","id17020119_user","i*uH|*u[5F&cE\OM","id17020119_system");


$username=$_POST['uname'];
$password1=$_POST['pass'];

$error="Invalid User name or Password.";

$result=mysqli_query($database,"select * from registrations where username='$username' AND password='$password1'");

//echo "Please, Wait!! We are rediecting...";
//echo $_SESSION['uname'];
//echo $username;





if(mysqli_num_rows($result))
{
    $_SESSION['uname']=$username;
	echo '<script type="text/javascript">
	 window.location.replace("index.php");
    </script>';
}
else
{
	//echo "User Credentials are Incorrect...Please Check..";
	
	 $_SESSION["error"] = $error;
    header("location: har_signin.php");
}
?>





