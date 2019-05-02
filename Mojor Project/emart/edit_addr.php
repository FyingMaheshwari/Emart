<?php

session_start();  
if(!$_SESSION['email'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php
include('connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$uphone = $_POST['uphone'];
$uaddr = $_POST['uaddr'];
$ucity = $_POST['ucity'];
$uid = $_GET['id'];

$sql = "update login_user set fname = '$fname',lname = '$lname',uphone = '$uphone',uaddr = '$uaddr',ucity='$ucity' where uid='$uid';";
if(mysqli_query($conn,$sql))
{
	header('location:checkout.php?id='.$uid);
}
else
{
	echo "Error".mysqli_error($conn);
}
?>