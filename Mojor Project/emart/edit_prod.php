<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Product</title>
</head>
<body>
<?php
$did = $_GET['did'];

include('connect.php');

$sql = "select * from products where did = '$did' ;";

$res = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
    $dname = $row['dname'];
    $cat = $row['cat']; 
    $type = $row['type'];
    $price = $row['price'];
    $desp = $row['desp'];
    $nwt = $row['nwt'];
    $mdate = $row['mdate'];
    $batch = $row['batch'];
    $lcns = $row['lcns'];
    $img = $row['img'];
}
?>

<?php echo "<form action='upd_prod.php?did=$did'  method='post' enctype='multipart/form-data'>"?>
    <label>Item Name</label>
    <input type="text" name="dname" value="<?php echo $dname; ?>"><br><br>
    <label>Item Category</label>
    <?php
    include('connect.php');

    $sql = "select * from cat;";
    $result = mysqli_query($conn,$sql);
    echo "<select name='cat'>";
    echo "<option value='".$cat."' selected='selected'>".$cat."</option>";
    while($row = mysqli_fetch_array($result))
        {
    echo '<option value='.$row['cname'].'>'.$row['cname'].'</option>';
        }
    echo "</select>";
    ?>
    <br><br>
    <label>Item Type</label>
    <?php
    include('connect.php');

    $sql = "select * from ityp;";
    $result = mysqli_query($conn,$sql);
    echo "<select name='type'>";
    echo "<option value='".$type."' selected='selected'>".$type."</option>";
    while($row = mysqli_fetch_array($result))
        {
    echo '<option value='.$row['tname'].'>'.$row['tname'].'</option>';
        }
    echo "</select>";
    ?>
    <br><br>
    <label>Item Price</label>
    <input type="text" name="price" value="<?php echo $price; ?>"><br><br>
    <label>Item Description</label>
    <input type="text" name="desp" value="<?php echo $desp; ?>"><br><br>
    label>Item Net Weight</label>
    <input type="text" name="nwt" value="<?php echo $nwt; ?>"><br><br>
    label>Item Manufacture Date</label>
    <input type="text" name="mdate" value="<?php echo $mdate; ?>"><br><br>
    label>Item Batch</label>
    <input type="text" name="batch" value="<?php echo $batch; ?>"><br><br>
    label>Item License</label>
    <input type="text" name="lcns" value="<?php echo $lcns; ?>"><br><br>
    <label>Item Image</label>
    <input type="file" name="image" value="<?php echo $img; ?>"?><br><br>
	<input type="submit" value="Edit">
</form>
</body>
</html>

