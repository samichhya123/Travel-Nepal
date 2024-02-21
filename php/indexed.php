<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$colors = array("Red", "Green", "Blue", "Yellow");
sort($colors); 
print_r($colors);
echo "<br>";
rsort($colors); 
print_r($colors);
?>
</body>
</html>