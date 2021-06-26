<?php


/*$host="localhost";
$user="id17020119_user";
$password="i*uH|*u[5F&cE\OM";
$db="id17020119_system";

$database=mysqli_connect("localhost","id17020119_user","i*uH|*u[5F&cE\OM","id17020119_system");*/
//$sendd=$take_clicks+1;
    include 'database.php';

	$User_click=$_POST['click1'];
	
	//$data="Select No_of_clicks from gd";  
	
	
	$result=mysqli_query($database,"Select No_of_clicks from gd");
	$row=mysqli_fetch_assoc($result);
	$take_clicks=(int)$row['No_of_clicks'];
	$sendd=$take_clicks+1;
	$updating="UPDATE `gd` SET `No_of_clicks` = '$sendd' WHERE `id` = '1'";
//$data=mysqli_query($database,"UPDATE `gd` SET `No_of_clicks` = '$sendd' WHERE `id` = ''" );
if($database->query($updating))
{
	//echo "successful";
	$rounding=ceil($take_clicks/4);
	header("location:https://meet.google.com/lookup/gd".$rounding);
//	$link=;
	
	//echo '<script type="text/javascript">
	// window.location.replace("https://meet.google.com/lookup/gd".$rounding);
	 
    //</script>';
}
else
{
	echo "something went wrong";
}
?>











