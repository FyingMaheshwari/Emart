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
    $target_path1 = "uploads/";
$target_path1 = $target_path1.basename( $_FILES['image2']['name']);

if(move_uploaded_file($_FILES['image2']['tmp_name'], $target_path1)) {
    echo "File uploaded successfully!";
} else{
    echo "Sorry, file not uploaded, please try again!";
}
} else{
    echo "Sorry, file not uploaded, please try again!";
}
?>
<?php
include('connect.php');

$dname = $_POST['dname'];
$cat = $_POST['cat'];
$type = $_POST['dtype'];
$price = $_POST['price'];
$desp = $_POST['desp'];
$nwt = $_POST['nwt'];
$mdate = $_POST['mdate'];
$bno = $_POST['bno'];
$lcns = $_POST['lcns'];
$img = $target_path;
$img1 = $target_path1;
$sq = "select dis from cat where cname='$cat';";
$res = mysqli_query($conn,$sq);
$row = mysqli_fetch_assoc($res);
if(isset($row))
{
$dis = $row['dis'];
$oprice = $price*$dis;
$oprice = $price - $oprice;
$sql = "insert into products(dname,type,cat,price,oprice,desp,nwt,mdate,batch,lcns,img,img2) values('$dname','$type','$cat','$price','$oprice','$desp','$nwt','$mdate','$bno','$lcns','$img','$img1');";
if(mysqli_query($conn,$sql))
{
	echo "<script>alert('Product Entry has been added');</script>";
	header("location:products.php");
}
else
{
	echo "Error ".mysqli_error($conn);
}
}

?>

