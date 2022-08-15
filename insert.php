<?php
$list=$_POST['list']; 
include "config.php";
mysqli_query($con, "INSERT INTO `tbltod`(`list`) VALUES ('$list')");
header("location:index.php");

?>
