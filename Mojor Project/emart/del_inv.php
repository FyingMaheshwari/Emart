<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
$pid = $_GET['pid'];
include('connect.php');

$sql = "delete from inventory where pid = '$pid'; ";

if(mysqli_query($conn,$sql))
{
	header('location:inventory.php');
}
else
{
	echo "Error".mysqli_error($conn);
}
?>