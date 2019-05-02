<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
$target_path = "uploads/";
$target_path = $target_path.basename( $_FILES['image']['name']);

if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
    echo "File uploaded successfully!";
} else{
    echo "Sorry, file not uploaded, please try again!";
}
?>
<?php
include('connect.php');

$pname = $_POST['pname'];
$ptype = $_POST['ptype'];
$pprice = $_POST['pprice'];
$pquant = $_POST['pquant'];
$pimg = $target_path;
$pid = $_GET['pid'];

$sql = "update inventory set pname = '$pname',ptype='$ptype',pprice='$pprice',pquant='$pquant',pimg='$pimg' where pid='$pid';";
if(mysqli_query($conn,$sql))
{
	header('location:inventory.php');
}
else
{
	echo "Error".mysqli_error($conn);
}
?>