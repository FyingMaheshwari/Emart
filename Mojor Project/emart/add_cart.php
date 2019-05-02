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
$sql = "insert into checkout(uid,product,cat,price,img) select uid,product,cat,price,img from checkout where chid = $chid ;";
if(mysqli_query($conn,$sql))
{
    $s = "select uid from checkout where chid = $chid;";
    $res = mysqli_query($conn,$s);
    $row = mysqli_fetch_assoc($res);
    if(isset($row))
    {
        header('location:checkout.php?id='.$row['uid']);
    }
    else
    {
        echo "Error".mysqli_error($conn);
    }
}
else
{
    echo "Error".mysqli_error($conn);
}
?>