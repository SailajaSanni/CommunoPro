<?php
session_start();
if(isset($_SESSION['uname']))
{
	header("location:index.php");
}

$name=$_POST['name'];
$username=$_POST['uname'];
$email=$_POST['mail'];
$mobileno=$_POST['mobile'];
$password1=$_POST['pass'];


$database=mysqli_connect("localhost","id17020119_user","i*uH|*u[5F&cE\OM","id17020119_system");
$data=mysqli_query($database,"insert into registrations values('$name','$username','$email','$mobileno','$password1')");
if($data)
{
	echo "successful";
	echo '<script type="text/javascript">
	 window.location.replace("har_signin.php");
    </script>';
}
else
{
	print "Something went wrong";
}
?>


