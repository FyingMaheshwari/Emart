<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
$cid = $_GET['cid'];
include('connect.php');

$sql = "delete from cat where cid = '$cid'; ";

if(mysqli_query($conn,$sql))
{
	header('location:cat.php');
}
else
{
	echo "Error".mysqli_error($conn);
}
?>