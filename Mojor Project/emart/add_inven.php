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

$iname = $_POST['iname'];
$itype = $_POST['itype'];
$iquant = $_POST['iquant'];
$iprice = $_POST['iprice'];

$sql = "insert into inventory(pname,ptype,pprice,pquant,pimg) values('$iname','$itype','$iprice','$iquant','$target_path');";
if(mysqli_query($conn,$sql))
{
	echo "<script>alert('Item Entry has been added');</script>";
	header("location:inventory.php");
}
else
{
	echo "Error ".mysqli_error($conn);
}
?>

