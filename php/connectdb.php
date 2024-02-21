<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $server="localhost";
  $username="root";
  $password= "";
  $database= "samichhya";
  $conn=mysqli_connect($server,$username,$password,$database);
  if(!$conn)
  {
    die("Database Connection Failed".mysqli_connect_error());

  }
  else{
    echo"Database Connection Successful";
  }
  ?>

</body>
</html>