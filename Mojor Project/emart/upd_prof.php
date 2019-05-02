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
$upass = $_POST['upass'];
$uphone = $_POST['uphone'];
$uaddr = $_POST['uaddr'];
$ucity = $_POST['ucity'];
$uid = $_GET['uid'];

$sql = "update login_user set fname = '$fname',lname = '$lname',upass = '$upass',uphone = '$uphone',uaddr='$uaddr',ucity='$ucity' where uid='$uid';";
if(mysqli_query($conn,$sql))
{
	session_destroy();
	header('location:index.php');
}
else
{
	echo "Error".mysqli_error($conn);
}
?>