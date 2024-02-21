<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  include 'connect.php';
  echo"<br>";
  $sql="create database samichhya";
  $result=mysqli_query($conn,$sql);
  if($result==true)
  {
  
    echo "Database is created";
  }
  else{
    echo "database was not created";
  }
  ?>

</body>
</html>