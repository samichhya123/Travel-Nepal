<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete
    </title>
</head>
<body>
<?php
   include 'connect.php';
   $sql="Drop database samichhya";
   $result=mysqli_query($conn,$sql);
   if($result){
    echo"<br>Database was dropped/deleted";
   }
   ?>
</body>
</html>