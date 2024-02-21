<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Detail Form</h1>
    <form action="process.php" method="post">
        <label for="id">ID:</label>
        <input type="text" name="id" id="id"><br><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label><br><br>

        <label for="hobbies">Hobbies:</label>
        <input type="checkbox" id="music" name="hobbies[]" value="music">
        <label for="music">Music</label>
        <input type="checkbox" id="sports" name="hobbies[]" value="sports">
        <label for="sports">Sports</label>
        <input type="checkbox" id="movies" name="hobbies[]" value="movies">
        <label for="movies">Movies</label><br><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="nepal">Nepal</option>
            <option value="china">China</option>
            <option value="india">India</option>
            <option value="usa">USA </option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
