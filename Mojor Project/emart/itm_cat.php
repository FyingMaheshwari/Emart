<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
include('connect.php');
$cat = $_POST['icat'];
$dis = $_POST['idis'];
$dis = $dis/100;
$sql = "insert into cat(cname,dis) values('$cat','$dis');";
if(mysqli_query($conn,$sql))
{
  header('location:cat.php');
} 
else
{
echo "Error".mysqli_error($conn);
}
?>
