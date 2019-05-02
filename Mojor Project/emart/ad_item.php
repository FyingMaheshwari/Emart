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
	<title>Add item</title>
</head>
<body>
<form action="add_item.php" method="post" enctype="multipart/form-data">
	<label>Item name</label>
	<input type="text" name="iname" placeholder="Enter item name"><br><br>
	<label>Item type</label>
	<input type="text" name="itype" placeholder="Enter item type"><br><br>
	<label>Item quantity</label>
	<input type="text" name="iquant" placeholder="Enter item Quantity"><br><br>
	<label>Item price</label>
	<input type="text" name="iprice" placeholder="Enter item price"><br><br>
	<label>Item image</label>
	<input type="file" name="image""><br><br>
        <input type="submit" value="Upload">
</form>
</body>
</html>
