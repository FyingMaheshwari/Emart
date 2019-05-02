<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "emart";

$conn = mysqli_connect($server,$user,$password,$db)
or die("Connection not Established ".mysqli_connect_error());

?>
