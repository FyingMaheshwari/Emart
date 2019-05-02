<?php

session_start();  
if(!$_SESSION['email'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
<?php
include('connect.php');

$id = $_GET['id'];
$img = $_POST['img'];
$cat = $_POST['cat'];
$dname = $_POST['item'];
$iprice = $_POST['amount'];

$sql = "insert into checkout(uid,product,cat,price,img) values('$id','$dname','$cat','$iprice','$img');";
if(mysqli_query($conn,$sql))
{
	echo "<script>window.alert('Item Entry has been added to cart')</script>";
    echo "<script>window.open('product.php?name=$cat','_self')</script>";
}
else
{
	echo "Error ".mysqli_error($conn);
}
?>

