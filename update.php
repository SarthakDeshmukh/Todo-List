<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<?php
$id= $_GET['ID'];
include "config.php";
$Rdata=mysqli_query($con,"select * from tbltod where id =$id");
$data = mysqli_fetch_array($Rdata);

?>
<body class="bg-info">
<form action="update1.php" method="POST">
<div class="container">
    <div class="row justify-content-centre bg-white">
    <h3>Update</h3>    
    <div class="col-12">
       
       <input type="text" required value="<?php echo $data['list'] ?>" name="list" class="form-control"  >
         </div>
        <div class="col-2">
          <button class="btn btn-outline-dark">Update</button>
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>"> 
        </div>

    </div>

</div>

</forms> 

</body>
</html>