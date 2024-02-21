<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  include 'connectdb.php';
  $sql="Create database infor";
  $result=mysqli_query($conn,$sql);
  if($result==true)
  {
    echo"Database was created";
  }
  ?>

</body>
</html>