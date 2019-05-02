<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
$iid = $_GET['iid'];
include('connect.php');

$sql = "delete from ityp where iid = '$iid'; ";

if(mysqli_query($conn,$sql))
{
	header('location:add_typ.php');
}
else
{
	echo "Error".mysqli_error($conn);
}
?>