<?php
include "config.php";
echo $id=$_GET['ID'];
mysqli_query($con, "DELETE FROM `tbltod` WHERE id =$id");
header("location:index.php");
?>