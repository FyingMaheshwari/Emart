<?php

session_start();  
if(!$_SESSION['email'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php
include('connect.php');
$feed = $_POST['feedback'];
$rating = $_POST['rating'];
$email = $_GET['uemail'];

$sql = "insert into feedback(uemail,feedback,rating) values('$email','$feed','$rating');";

if(mysqli_query($conn,$sql))
{
	header("location:home.php");
}
else
{
	echo "error".mysqli_error($conn);
}
?>