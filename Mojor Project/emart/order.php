<?php 

session_start();  
if(!$_SESSION['email'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
$email = $_SESSION['email'];
?>
<?php
$id = $_GET['id'];

include('connect.php');

$s1 = "select * from login_user where uemail='$email' and uid=$id;";
$r1 = mysqli_query($conn,$s1);
$ro1 = mysqli_fetch_assoc($r1);

$fname = $ro1['fname'];
$lname = $ro1['lname'];
$uphone = $ro1['uphone'];
$uaddr = $ro1['uaddr'];
$ucity = $ro1['ucity'];
 

$sql = "select product,cat,price,img,COUNT(*) as qty from checkout where uid=$id GROUP BY product HAVING COUNT(*) > 0;";
$res = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($res))
{
    $product = $row['product'];
    $cat = $row['cat'];
    $price = $row['price'];
    $img = $row['img'];
    $qty = $row['qty'];
    $odate = date('Y-m-d');
    $temp = date('dmYHis');
    $ostatus = "Pending";
    $ono = $temp.$price;

    $tprice =  $qty*$price;
    $sq = "insert into orders(uid,uemail,fname,lname,uaddr,uphone,ucity,ono,product,price,tprice,qty,img,odate,ostatus) values($id,'$email','$fname','$lname','$uaddr','$uphone','$ucity','$ono','$product','$price','$tprice','$qty','$img','$odate','$ostatus');";
    if(mysqli_query($conn,$sq))
    {
        $s = "delete from checkout where uid=$id;";
        if(mysqli_query($conn,$s))
        {
            header("Location: mail.php?id=$ono");
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
}
?>