<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert data</title>
</head>
<body>
<?php
include'connectdb.php';
echo"";
$sql = "INSERT INTO persons (first_name, last_name, email)
 VALUES ('Samichhya', 'Shrestha', 'samishrestha@gmail.com'),
 ('Prenkha', 'Adhikari', 'prenkhaadhi@gmail.com'),
 ('Pratigya', 'Bhattarai', 'pratigyabhattarai@gmail.com'),
 ('Priyanka', 'Bhatt', 'priyankyabhatt@gmail.com')";
  $result=mysqli_query($conn,$sql);
  if(!$result){
    die("Data not inserted due to".mysqli_error($conn));
    } else{
        echo "Data inserted.";
    }
?>
</body>
</html>