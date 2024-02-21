<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="formvalidation.php" method="POST">
  <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="address">Address</label>
        <input type="address" id="address" name="address" required><br><br>
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>