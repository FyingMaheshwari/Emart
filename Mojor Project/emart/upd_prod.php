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

    $dname = $_POST['dname'];
    $type = $_POST['type'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $desp = $_POST['desp'];
    $nwt = $_POST['nwt'];
    $mdate = $_POST['mdate'];
    $batch = $_POST['batch'];
    $lcns = $_POST['lcns'];
    $img = $target_path;
    $did = $_GET['did'];
$sq = "select dis from cat;";
$res = mysqli_query($conn,$sq);
$row = mysqli_fetch_assoc($res);
if(isset($row))
{
    $dis = $row['dis'];
    $oprice = $price*$dis;
    $oprice = $price - $oprice;
    $sql = "update products set dname = '$dname',type='$type',cat='$cat',price='$price',oprice='$oprice',desp='$desp',nwt='$nwt',mdate='$mdate',batch='$batch',lcns='$lcns',img='$img' where did='$did';";
    if(mysqli_query($conn,$sql))
    {
        header('location:products.php');
    }
    else
    {
        echo "Error".mysqli_error($conn);
    }
}

?>