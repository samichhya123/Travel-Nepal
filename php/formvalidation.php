<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
</head>
<body>
  <h2>Form Validation using PHP</h2>
  <?php
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $name=$_POST['name'];
    $add=$_POST['address'];
    $gen=$_POST['gender'];
    $errors=[];
    if (empty($name)) {
      $errors[] = "Name is required.";
  }
  else if(strlen($name)<5){
    $errors[]="Name is too short";
  }
  if (empty($add)) {
    $errors[] = "Address is required.";
}
else if(strlen($add)<5){
  $errors[]="Address is too short";
}
if (empty($gen)) {
  $errors[] = "Gender is required.";
}
if(empty($errors))
{
  echo"Form has been submitted successfully";
}
else{
  foreach($errors as $error)
  echo $error."<br>";
}
  
 }
  ?>
</body>
</html>