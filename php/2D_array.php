<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $contacts=array(
    array(
      "name"=>"Peter Parker",
      "email"=>"peterparker@mail.com",
    ),
    array(
      "name"=>"Harry Potter",
      "email"=>"harrypotter@mail.com",
    )
    );
    echo"His/Her name is ".$contacts[0]["name"]." and email id is:".$contacts[0]["email"];
    echo"<br>";
    echo "His/Her name is ".$contacts[1]["name"]." and email id is:".$contacts[1]["email"];
    ?>
</body>
</html>