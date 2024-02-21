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
  echo "<br>";
  $sql="SELECT *FROM persons";
  if($result=mysqli_query($conn,$sql)) {
    if(mysqli_num_rows($result)> 0) {
      echo"<table>";
      echo "<tr>";
      echo "<th>id</th>";
      echo "<th>first_name</th>";
      echo"<th>last_name</th>";
      echo "<th>email</th>";
      echo "</tr>";
      while($row=mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['first_name']."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_free_result($result);
    } else {
      echo "no records matching your query were found";}}else{
        echo "ERROR:Could not able to execute $sql";
        mysqli_error($link);
      }
      mysqli_close($conn);
  ?>
</body>
</html>