<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
$did = $_GET['did'];
include('connect.php');

$sql = "delete from products where did = '$did'; ";

if(mysqli_query($conn,$sql))
{
	header('location:products.php');
}
else
{
	echo "Error".mysqli_error($conn);
}
?>