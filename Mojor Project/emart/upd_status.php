<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
$oid = $_GET['oid'];
include('connect.php');

$s1 = "select qty,product,price,img from orders where oid=$oid;";
    $r1 =  mysqli_query($conn,$s1);
    $ro1 = mysqli_fetch_assoc($r1);
    $qty = $ro1['qty'];
    $product = $ro1['product'];
    $price = $ro1['price'];
    $img = $ro1['img'];
    
    if(isset($ro1))
    {
        $s2 = "update inventory set pquant = pquant-$qty where pprice=$price or pimg='$img';";
        if(mysqli_query($conn,$s2))
        {
            $today = date('Y-m-d');
            $sql = "update orders set ostatus='Delivered',ddate='$today' where oid=$oid;";
            if(mysqli_query($conn,$sql))
            {
                header("Location: deliver_mail.php?id=$oid");
            }
            else
            {
                echo "Error ".mysqli_error($conn);
            }
        }
    }
?>