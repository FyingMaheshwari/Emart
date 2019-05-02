<?php

session_start();  
if(!$_SESSION['email'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php
$oid = $_GET['oid'];
include('connect.php');

$sql = "update orders set ostatus='Cancelled' where oid=$oid;";
if(mysqli_query($conn,$sql))
{
    header("Location: cancle_mail.php?id=$oid");
}
else
{
    echo "Error ".mysqli_error($conn);
}
?>