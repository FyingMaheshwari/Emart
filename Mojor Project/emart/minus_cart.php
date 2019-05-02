<?php

session_start();  
if(!$_SESSION['email'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
?>
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
    $s = "select uid from checkout where uid=$uid and product='$prod' and price=$price;";
    $res = mysqli_query($conn,$s);
    $row = mysqli_fetch_assoc($res);
    if(isset($row))
    {
        header('location:checkout.php?id='.$row['uid']);
    }
    else
    {
        header('location:home.php');
    }
    
}
else
{
    echo "Error".mysqli_error($conn);
}
?>