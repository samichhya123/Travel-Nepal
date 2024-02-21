<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logical Operators</title>
</head>
<body>
<h2>&& Operation</h2>
<?php
$x = 1;
$y = 0;
echo"The result is: ";//0-false
var_dump($x && $y);
?>
<br>
<h2>|| Operation</h2>
<?php
$x = 1;
$y = 0;
echo"The result is: ";//1=true
var_dump($x || $y);
?>
<br>
<h2>AND Operation</h2>
<?php
$x = 1;
$y = 0;
echo"The result is: ";//0=false
var_dump($x and $y);
?>
<br>
<h2>OR Operation</h2>
<?php
$x = 1;
$y = 0;
echo"The result is: ";//1=true
var_dump($x or $y);
?>
<br>
<h2>NOT Operation</h2>
<?php
$x = 1;
echo"The result is: ";//1=true
var_dump(!$x);
?>
</body>
</html>