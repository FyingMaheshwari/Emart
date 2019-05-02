<?php
$chid = $_GET['chid'];
include('connect.php');
$temp = "select uid,product,price from checkout where chid=$chid;";
$r = mysqli_query($conn,$temp);
$ro = mysqli_fetch_assoc($r);
$uid = $ro['uid'];
$prod = $ro['product'];
$price = $ro['price'];

$sql = "delete from checkout where chid = '$chid'; ";

if(mysqli_query($conn,$sql))
{
	header('location:checkout.php?id='.$uid);
}
else
{
	echo "Error".mysqli_error($conn);
}
?>