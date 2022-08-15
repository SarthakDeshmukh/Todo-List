<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO-LIST</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="styles.css" class="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&family=Sacramento&display=swap" rel="stylesheet">     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
     <script src="https://kit.fontawesome.com/563c847d0a.js" crossorigin="anonymous"></script>
</head>
<body>
<form action="insert.php" method="POST">
<div class="container">
    <div class="row justify-content-centre bg-white">
    <h3>ToDo-List</h3>    
    <div class="col-12">
       <input type="text" required name="list" class="form-control" placeholder="Enter your task here">
       
       <span><button class="btn btn-outline-dark">add</button></span>
         </div>
        
    </div>

</div>

</forms> 

<?php
include "config.php";
$rawData=mysqli_query($con,"select * from tbltod");

?>


<div class="container">
  <div class="col-12 bg-white m-auto mt-3">
    <table class="table">

 <tbody>
  <?php
  while($row=mysqli_fetch_array($rawData)){

  
  ?>
  <tr>
    <td>
      <?php
      echo $row['id']
      ?>
    </td>
    <td>
      <?php
      echo $row['list']
      ?>
    </td>
    <td>
      <a href="delete.php? ID=<?php
      echo $row['id']
      ?>"><i class="fa-regular fa-trash-can"></i></a>
      <a  href="update.php? ID=<?php
      echo $row['id']
      ?>" ><i class="fa-regular fa-pen-to-square"></i></a>
    </td>

  </tr>
 
  <?php
  }
  ?>
 </tbody>

 </table>
  </div>
</div>
</body>
</html>