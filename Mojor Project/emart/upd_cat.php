<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
include('connect.php');

$cname = $_POST['cname'];
$dis = $_POST['idis'];
$dis = $dis/100;
$cid = $_GET['cid'];

$sql = "update cat set cname = '$cname',dis = '$dis' where cid='$cid';";
if(mysqli_query($conn,$sql))
{
	$s1 = "select price from products where cat='$cname';";
	$r1 = mysqli_query($conn,$s1);
	while($ro1 = mysqli_fetch_assoc($r1))
	{
		$price = $ro1['price'];
		$dprice = $price*$dis;
		$nprice = $price-$dprice;

		$s2="update products set cat='$cname',oprice='$nprice' where cat='$cname' and price='$price';";
		if(mysqli_query($conn,$s2))
		{
			echo "<script>window.alert('Update Successfully!!')</script>";
            echo "<script>window.open('cat.php','_self')</script>";
		}
		else
		{
			echo "Error".mysqli_error($conn);
		}
	}	
}
else
{
	echo "Error".mysqli_error($conn);
}


?>