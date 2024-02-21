<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $age=array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
  asort($age);
  print_r($age);
  echo"<br>";
  arsort($age);
  print_r($age);
  ?>
</body>
</html>