<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo"The information you have entered are: ";
  echo"<br>";
  echo"Name=".$_GET["name"];
  echo"<br>";
  echo"Address=".$_GET["address"];
  echo"<br>";
  echo"Email=".$_GET["email"];
  ?>
</body>
</html>