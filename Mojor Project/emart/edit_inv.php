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
	<title>Edit Inventory</title>
</head>
<body>
<?php
$pid = $_GET['pid'];

include('connect.php');

$sql = "select * from inventory where pid = '$pid' ;";

$res = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
    $pname = $row['pname'];
    $ptype = $row['ptype'];
    $pprice = $row['pprice'];
    $pquant = $row['pquant'];
    $pimg = $row['pimg'];
}
?>

<?php echo "<form action='upd_inv.php?pid=$pid'  method='post' enctype='multipart/form-data'>"?>
    <label>Item Name</label>
    <input type="text" name="pname" value="<?php echo $pname; ?>"><br><br>
    <label>Item Type</label>
    <?php
    include('connect.php');

    $sql = "select * from ityp;";
    $result = mysqli_query($conn,$sql);
    echo "<select name='ptype'>";
    echo "<option value='".$ptype."' selected='selected'>".$ptype."</option>";
    while($row = mysqli_fetch_array($result))
        {
    echo '<option value='.$row['tname'].'>'.$row['tname'].'</option>';
        }
    echo "</select>";
    ?>
    <br><br>
    <label>Item Price</label>
    <input type="text" name="pprice" value="<?php echo $pprice; ?>"><br><br>
    <label>Item Quantity</label>
    <input type="text" name="pquant" value="<?php echo $pquant; ?>"><br><br>
    <label>Item Image</label>
    <input type="file" name="image" value="<?php echo $pimg; ?>"><br><br>
	<input type="submit" value="Edit">
</form>
</body>
</html>

